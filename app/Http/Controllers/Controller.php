<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // public function __invoke()
    // {
        // return view('404');
   // }

 public function index(){
        return view('index');
    }
    public function about(){
        return view("about");
    }
    public function classes(){
        return view("classes");
    }
    public function contact(){
        return view("contact");
    }
    public function facilities(){
        return view("schoolFacilities");
    }
    public function teacher (){
      return view("teacher");
    }
    public function call (){
        return view("beTeacher");
      }
      public function appointment()  {
        return view("appointment");
    }
    public function testimonial()  {
        return view("Testimonial");
    }
}
