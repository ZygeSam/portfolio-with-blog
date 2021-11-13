<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //accessing the home page
    public function index(){
        $title='Home- Welcome to ZBlog';
        return view('pages.index')->with('title', $title);
    }

     //accessing the about page
     public function about(){
        $title='ZBlog- Welcome to About page';
        return view('pages.about')->with('title', $title);;
    }

      //accessing the contact page
      public function contact(){
        $title='ZBlog-Welcome to Contact Page';
        return view('pages.contact')->with('title', $title);;
    }

    public function signup(){
        $title='ZBlog-Signup';
        return view('pages.signup')->with('title', $title);;
    }

    public function login(){
        $title='ZBlog-Login';
        return view('pages.login')->with('title', $title);;
    }

    public function dashboard(){
        $title='ZBlog-Dashboard';
        return view('pages.dashboard')->with('title', $title);;
    }
}
