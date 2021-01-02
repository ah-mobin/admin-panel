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
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
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

            @elseif(session()->has('update_slider'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('update_slider') }}
                </div>
            @endif    

            <div class="row">
                <div class="col-sm-12">

                    <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#addNewSlider">
                       Add New Slider
                    </button>

                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Heading One</th>
                                <th>Heading Two</th>
                                <th>Heading Three</th>
                                <th>Slider Image</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
        
        
                        <tbody>
                            @foreach($sliders as $slider)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $slider->slider_heading_one }}</td>
                                    <td>{{ $slider->slider_heading_two }}</td>
                                    <td>{{ $slider->slider_heading_three }}</td>
                                    <td><img src="{{ $slider->slider_image }}" width="100px" alt=""></td>
                                    <td><span class="badge badge-primary">{{ $slider->status }}</span></td>
                                    <td>
                                        <a href="{{ url('slider/edit/'.$slider->id) }}"> <i class="fa fa-edit mr-4"></i> </a>
                                        <a href="{{ url('slider/remove/'.$slider->id) }}"> <i class="fa fa-trash"></i> </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>



  
  <!-- Modal -->
  <div class="modal fade" id="addNewSlider" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addNewSliderLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addNewSliderLabel">Add New Slider</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('added.slider') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="modal-body">

                <div class="form-group">
                    <input type="text" name="slider_heading_one" class="form-control my-4" placeholder="Slider Heading One">

                    <input type="text" name="slider_heading_two" class="form-control my-4" placeholder="Slider Heading One">

                    <input type="text" name="slider_heading_three" class="form-control my-4" placeholder="Slider Heading One">

                    <input type="file" name="slider_image" class="form-control my-4" placeholder="Slider Image">
                </div>

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Add Now</button>
            </div>

        </form>
      </div>
    </div>
  </div>


@endsection