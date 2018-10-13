<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts=Post::all();
        return view('posts.index',compact(['posts']));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(CreatePostRequest $request)
    {
        $post = new Post();

        if($file = $request->file('file'))
        {
            $name=$file->getClientOriginalName();
            $file->move('images',$name);

            $post->path=$name;
        }

        $post->title = $request->title;
        $post->content = $request->description;
        $post->user_id = 1;
        $post->save();
    }

    public function show($id)
    {
        $post = Post::findorfail($id);
        return view('posts.show',compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findorfail($id);
        return view('posts.edit',compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findorfail($id);
        $post->title = $request->title;
        $post->content = $request->description;
        $post->save();

        return redirect('posts');
    }

    public function destroy($id)
    {
        $post = Post::findorfail($id);
        $post->delete();

        return redirect('posts');
    }
}
