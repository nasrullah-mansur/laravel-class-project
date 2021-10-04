<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('created_at', 'DESC')->get();
        return view('front.index', compact('sliders'));
    }

    public function blog_by_category()
    {
        # code...
    }

    public function single_blog()
    {
        # code...
    }

    public function contact()
    {
        return view('front.contact');
    }
}
