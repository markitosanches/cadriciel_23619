<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function article(){
        return view('article');
    }

    public function contact(){
        return view('contact');
    }

    
    public function contactForm(Request $request){
        // print_r($_POST);
        //return $request;
        return view('contact', ['data' => $request]);
    }
}
