<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::orderBy('created_at', 'DESC')->get();
        return view('admin.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg',
            'image_alt' => 'required',
        ]);

        $slider = new Slider();
        $slider->image = ImageUpload($request->image, SLIDER_PATH, null);
        $slider->image_alt = $request->image_alt;
        $slider->content = $request->content;
        $slider->save();

        return redirect()->route('slider.index');
    }

    public function edit($id)
    {
        $slider = Slider::where('id', $id)->firstOrFail();
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::where('id', $id)->firstOrFail();

        $request->validate([
            'image' => 'required|mimes:png,jpg',
            'image_alt' => 'required',
        ]);

        if($request->hasFile('image')) {
            $slider->image = ImageUpload($request->image, SLIDER_PATH, $slider->image);
        }

        $slider->image_alt = $request->image_alt;
        $slider->content = $request->content;
        $slider->save();

        return redirect()->route('slider.index');
    }

    public function delete($id)
    {
        $slider = Slider::where('id', $id)->firstOrFail();
        removeImage($slider->image);
        $slider->delete();

        return redirect()->route('slider.index');
    }
}
