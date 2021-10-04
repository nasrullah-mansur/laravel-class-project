@extends('layouts.admin')
@section('content')
<form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        
        <div class="body">
            <div class="form-group">
                <div>
                    <p>Upload your profile picture (png or jpg only, max file size 200KB, ratio 1920x800)</p>
                    <input type="file" name="image" class="dropify" data-max-file-size-preview="200K" data-allowed-file-extensions="png jpg jpeg" value="" id="add_img">
                    @error('image')
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-sm-12 px-0">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Image alter text" name="image_alt">
                    @error('image_alt')
                        <span class="text-danger">{{ $errors->first('image_alt') }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 px-0">
                <div class="form-group mt-3">
                    <textarea rows="4" class="form-control no-resize" placeholder="Slider text up to 64 characters" id="add_text" name="content"></textarea>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button id="add_slider_btn" type="submit" class="btn btn-success waves-effect">ADD SLIDER ITEM</button>
        </div>
    </div>
</form>
@endsection