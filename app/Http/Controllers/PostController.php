<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index' , compact('posts'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {
        $post    = Post::find($id);
        $comment = Post::find($id)->comment;


        return view('posts.post' , compact('post' , 'comment'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $post = Post::findorfail($id);
        $post->delete();
        return redirect()->route('post.index')->with('del_pos' ,"you've deleted post");
    }
}
