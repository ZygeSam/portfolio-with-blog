<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function dashboard()
    {
        //creating the posts index which shows all the blog posts
        $title = 'List of Blog Posts You have Created';
        $user_id = auth()->user()->id;
        $posts = Post::where('user_id', $user_id)->paginate(2);
        return view('pages.dashboard')->with(['title'=>$title, 'posts'=>$posts]);
    }
    public function index()
    {
        //creating the posts index which shows all the blog posts
        $title = 'List of Blog Posts';
        $posts = Post::orderBy('created_at', 'desc')->paginate(2);
        return view('posts.index')->with(['title'=>$title, 'posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = 'Create a Post';
        return view('posts.create')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validateRequest();
        $post = new Post();
        $post->title = $request['title'];
        $post->body = $request['body'];
        $post->user_id = auth()->user()->id;
        $post->save();
        return back()->with('message', 'Story Saved and Published');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        //Shows a specific blog post
        $post = Post::findOrFail($post);
        $title = $post->title;
        return view('posts.show')->with(['title'=>$title, 'post'=>$post]);
    }   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
        //
        $title = 'Edit a Post';
        return view('posts.edit')->with(['title'=> $title, 'post'=>$post->id]);
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
    public function destroy(Request $request)
    {
        //
        $post = Post::where('id', $request);
        $post->delete();
        return redirect()->route('dashboard')->with('message', 'Post deleted Successfully');
    }


    public function validateRequest()
    {
        //
        $data = request()->validate([
            'title'=> 'min:3|unique:posts',
            'body' => 'min:20'
        ]);
    }
}
