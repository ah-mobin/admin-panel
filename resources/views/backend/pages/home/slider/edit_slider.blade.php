@extends('backend.layout.master')

@section('title','All Sliders')

@section('main')



<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Sliders</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sliders</li>
                    </ol>
                </div>
            </div>


            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>
            
            @elseif(session()->has('warning'))
                <div class="alert alert-warning" role="alert">
                    {{ session()->get('warning') }}
                </div>
            @endif    

            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8">

                    <a href="{{ route('sliders') }}" class="btn btn-danger">All Sliders</a>

                    <form action="{{ url('update/slider/'.$slider->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
            
                        <!-- <div class="modal-body"> -->
            
                            <div class="form-group">
                                <input type="text" name="slider_heading_one" class="form-control my-4" value="{{ $slider->slider_heading_one }}">
            
                                <input type="text" name="slider_heading_two" class="form-control my-4" value="{{ $slider->slider_heading_two }}">
            
                                <input type="text" name="slider_heading_three" class="form-control my-4" value="{{ $slider->slider_heading_three }}">

                                <label for="oldImg">Current Slider Image</label><br>
                                <img src="{{ $slider->slider_image }}" class="img-responsive w-25"><br>

                                <input type="hidden" name="slider_current_image" value="{{ $slider->slider_image }}">

                                <input type="file" name="slider_image" class="form-control my-4" placeholder="Update Slider Image">
                            </div>

                            <div class="form-group">
                                <label for="changeStatus">Status</label><br>
                                <input type="radio" name="status" value="active" @if( $slider->status == 'active') checked @endif> Active

                                <input type="radio" name="status" value="inactive" @if( $slider->status == 'inactive') checked @endif> Inactive
                            </div>
            
                        <!-- </div> -->
            
                        
                        <button type="submit" class="btn btn-success">Update Slider</button>
                        
            
                    </form>


                </div>
            </div>

        </div>
    </div>
</div>





@endsection