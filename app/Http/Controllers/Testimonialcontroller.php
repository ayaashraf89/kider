<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Traits\Common;

class Testimonialcontroller extends Controller
{
    use Common;
    private $columns = ['name', 'image', 'profession', 'description', 'published'];

     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonial = Testimonial::get();
        return view ('testimonials', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $testimonial = Testimonial::get();
        return view ('addTestimonial', compact('testimonial'));
    }
  /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->image = $request->image;
        $testimonial->profession = $request->profession;
        $testimonial->description = $request->description;
        if(isset($request->published)){
                $testimonial->published = 1;
            }else{
                $testimonial->published = 0;
            }
        $testimonial->save();
        return 'Added Successfully';
}

}