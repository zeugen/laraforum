<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Photo;
use App\Category;
class PagesController extends Controller
{
    //
    /**
     * Show the application dashboard for unauthenticated users
     *
     * @return \Illuminate\Http\Response
     */
    public function getindex()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(4);
        return view('home',compact('posts'));
    }
}
