<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){    
        $posts = Post::latest()->get();    
        return view('post.index', compact('posts'));
    }

 
    public function validateform(Request $request) {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required|max:100',
            'created_at'=>'required|date_format:Y-m-d H:i:s'
        ]);        
    }

    public function showall(){
        $posts = Post::latest()->get();    
        return view('post.posts', compact('posts'));
        if(!Auth::user()){
            return redirect()->route('post.posts')
                ->with('error','Not Autorized');
        }
    }

        
}
