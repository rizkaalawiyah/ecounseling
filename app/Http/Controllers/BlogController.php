<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
   	return view('blog/home');
   }

    public function about(){
   	return view('blog/about');
   }

    public function price(){
   	return view('blog/price');
   }
   public function faq(){
   	return view('blog/faq');
   }

  public function post(){
    return view('blog/post');
   }
     public function dashboard(){
    return view('admin/dashboard');
   }
        public function user(){
    return view('admin/user');
   }

           public function dataperkenalan(){
    return view('admin/dataperkenalan');
   }

}
