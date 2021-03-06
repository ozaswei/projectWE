<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function firstPage(){
        return view('startPage');
    }

    public function secondPage(Request $request){
        $posts = Post::paginate(5);
        return view('WE.2ndpage',compact('posts'));
    }
}
