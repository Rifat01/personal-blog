<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PublicController extends Controller
{
    public function index()
    {
      $posts = Post::paginate(2);

      return view('welcome', compact('posts'));
    }
    public function about()
    {
      return view('about');
    }
    public function singlePost(Post $post)
    {
      //for writing less code we can do this(changing route to "post/{post}" first)

      //$post = Post::find($id);
      return view('singlePost', compact('post'));
    }
    public function contact()
    {
      return view('contact');
    }
    public function contactPost()
    {
      //
    }



    //API
    public function search(){
        return view('search');
    }
}
