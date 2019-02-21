<?php

namespace App\Http\Controllers;

use App\Post;
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
        return view('back.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.posts.create');
    }

    /**
     * Store a newly created store.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the form data
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        //save the form data to database

        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = 1;
        $post->slug = str_slug($request->title);
        $post->save();

        //return view or response

        return redirect()->route('post.create')->with('success', 'Successfully Created');
        // return redirect()->route('post.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('back.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //validate the form data
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        //find the post id fron database
        $post = Post::findorFail($id);
        //if found update the post
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect()->route('post.index')->with('success', 'Successfully Updated');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->with('success', 'Successfully Deleted');;
    }
}
