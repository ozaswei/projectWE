<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function infiniteScroll(Request $request){
        $posts = Post::paginate(5);
        if ($request->ajax()) {
            $view = view('WE.test.data',compact('posts'))->render();
            return response()->json(['html'=>$view]);
        }
        return view('WE.test.infiniteScrollTest',compact('posts'));
    }
}
