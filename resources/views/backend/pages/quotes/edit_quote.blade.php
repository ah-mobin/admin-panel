@extends('backend.layout.master')

@section('title','Edit Quote')

@section('main')

<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Edit Quote</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('popular.quotes') }}">Quotes</a></li>
                        <li class="breadcrumb-item active">Edit Quote</li>
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
                <div class="col-10">
                    <form action="{{ url('update/quote/'.$quote->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="form-group my-5">
                            <label for="">Quote Speech:</label>
                            <textarea name="quote_speech" class="form-control">{{ $quote->quote_speech }}"</textarea>
                        </div>

                        <div class="form-group my-5">
                            <label for="">Speaker Name:</label>
                            <input type="text" name="speaker" class="form-control" value="{{ $quote->speaker }}" >
                        </div>

                        <div class="form-group my-5">
                            <label for="">Status</label><br>
                            <input type="radio" name="status" value="disabled" @if($quote->status == 'disabled') checked @endif> Disable
                            <input type="radio" name="status" value="enabled" @if($quote->status == 'enabled') checked @endif> Enable
                        </div>

                        <div class="form-group">
                            <label for="">Current Photo</label><br>
                            <img src="{{ $quote->speaker_photo }}" class="w-25" alt="">
                            <input type="hidden" name="old_image" value="{{ $quote->speaker_photo }}">
                        </div>
                        <div class="form-group my-5">
                            <label for="">Update Image:</label>
                            <input type="file" name="speaker_photo" class="form-control my-4">
                        </div>
                    
                        <button type="submit" class="btn btn-success">Update</button>
            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection