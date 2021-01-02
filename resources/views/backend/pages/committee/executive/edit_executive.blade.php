@extends('backend.layout.master')

@section('title','Edit Executive Member')

@section('main')


<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Edit Member Details</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('executive.member') }}">Executive Committee</a></li>
                        <li class="breadcrumb-item active">Edit Member Details</li>
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
                <div class="col-12">
                    <form action="{{ url('update/executive/'.$executive->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="modal-body">
                    
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" class="form-control my-4 @error('name') is-invalid @enderror" value="{{ $executive->name }}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                    
                            <div class="form-group">
                                <label for="">Post:</label>
                                <input type="text" name="post" class="form-control my-4" value="{{ $executive->post }}">
                            </div>
                    
                            <div class="form-group">
                                <label for="">Country:</label>
                                <input type="text" name="country" class="form-control my-4" value="{{ $executive->country }}">
                            </div>

                            <div class="form-group">
                                <label for="">Photo:</label><br>
                                <img src="{{ $executive->photo }}" alt="" height="120px">
                                <input type="hidden" name="old_image" value="{{ $executive->photo }}">
                            </div>
                    
                            <div class="form-group">
                                <label for="">Update Photo:</label>
                                <input type="file" name="photo" class="form-control my-4">
                            </div>
                    
                            <div class="form-group">
                                <label for="topLevel">What To Place Him/Her at First of YOur List?</label><br>
                                <input type="radio" name="top_level" value="1" @if($executive->top_level == 1) checked @endif> Yes &nbsp;
                                <input type="radio" name="top_level" value="0" @if($executive->top_level == 0) checked @endif> No
                            </div>

                            <div class="form-group">
                                <label for="position">Position:</label><br>
                                <input type="number" name="position" class="form-control @error('position') is-invalid @enderror" value="{{ $executive->position }}">

                                @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    
                            <div class="form-group">
                                <label for="">Phone Number:</label>
                                <input type="text" name="phone_number" class="form-control my-4" value="{{ $executive->phone_number }}">
                            </div>
                    
                            <div class="form-group">
                                <label for="">Email:</label>
                                <input type="text" name="email" class="form-control my-4" value="{{ $executive->email }}">
                            </div>
                        </div>
                    
                       
                        <button type="submit" class="btn btn-success">Add New</button>
            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection