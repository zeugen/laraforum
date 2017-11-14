<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Photo;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::pluck('name','id')->all();
        return view ('admin.users.create', compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
      //check if password is empty
      if(trim($request->password == '')){
        $input = $request->except('password');
      }else{
        $input = $request->all();
      }

        $input = $request->all();
        if($file = $request->file('avatar_path'))
        {
          $name = time().$file->getClientOriginalName();
          $file->move('images', $name);
          $photo = Photo::create(['file' => $name]);
          $input['avatar_path'] = $photo->id;
        }

        $input['password'] = bcrypt($request -> password);
        User::create($input);
         return redirect('admin/users/');
        // return $request->all();
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
                //pass in roles as in create method
        $roles = Role::pluck('name', 'id')->all();

        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
      //find users
      $user = User::findOrFail($id);

      //check if password is empty
      if(trim($request->password == '')){
        $input = $request->except('password');
      }else{
        $input = $request->all();
      }

      //
      if($file = $request->file('photo_id')){
        $name = time().$file->getClientOriginalName();
        $file->move('img/user', $name);
        $photo = Photo::create(['file'=>$name]);
        $input['avatar_path'] = $photo->id;
      }
        //first encrypt password
        $input['password'] = bcrypt($request -> password);
        $user->update($input);
       return redirect('/admin/users');
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
