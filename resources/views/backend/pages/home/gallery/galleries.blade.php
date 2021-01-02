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
                    <h4 class="page-title">Gallery</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Gallery</li>
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

                    <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#addNewGalleryImage">
                        Add New Image
                     </button>

                    
                     <div class="row">
                         @foreach($galleries as $image)
                         <div class="col-md-4 col-lg-4 col-sm-6 col-12">
                             <img src="{{ $image->gallery_image_location }}" class="img-fluid" alt="">
                         </div>
                         @endforeach
                     </div>


                </div>
            </div>

        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="addNewGalleryImage" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addNewGalleryImageLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addNewGalleryImageLabel">Add New Image</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('added.image') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="modal-body">

                <div class="form-group">
                    <input type="file" name="gallery_image_location" class="form-control my-4">
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