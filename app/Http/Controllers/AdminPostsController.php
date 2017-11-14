<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Requests\PostsCreateRequest;
use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Photo;
use App\Category;
//use App\Category;
use App\User;
class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view ('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::pluck('name', 'id')->all();
      return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsCreateRequest $request)
    {
        //
        //since the post belongs to a certain user, take the current logged in user and asign the post to him
        $input = $request->all();
        $user = Auth::user(); //pull in looged in user
        if($file = $request-> file('photo_id')){
           $name = time().$file->getClientOriginalName();
           $file->move('images',$name);
           $photo= Photo::create(['file'=>$name]);
           $input['photo_id'] = $photo->id;
        }
      //  return $request ->all();
      $user->posts()->create($input);
      return redirect('/admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
