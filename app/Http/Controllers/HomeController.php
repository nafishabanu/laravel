<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::latest()->get();
        $posts = Post::latest()->get();
        // return view('back.category.index', compact('category'));
        return view('front.pages.index')->with(['categories' => $categories, 'posts' => $posts]);

    }
}
