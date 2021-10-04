@extends('layouts.admin')
@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th style="width: 50px;">#</th>
                    <th style="width: 280px;">SLIDER CONTENT</th>
                    <th style="width: 260px;">SLIDER IMAGE</th>
                    <th style="width: 250px">IMAGE ALT TEXT</th>
                    <th style="text-align: center; width: 150px">ACTION</th>
                </tr>
            </thead>
            <tbody id="slider_table">
                @forelse ($sliders as $slider)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $slider->content ? $slider->content : 'NULL' }}</td>
                    <td>
                        <img width="90" src="{{ asset($slider->image) }}" alt="slide-img">
                    </td>
                    <td>{{ $slider->image_alt }}</td>
                    <td style="text-align: center;">
                        <a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-info edit_btn">EDIT</a>
                        <a onclick="return confirm('Are you sure??')" href="{{ route('slider.delete', $slider->id) }}" class="btn btn-danger">DELETE</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" align="center">No data found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection