@extends('backend.layout.master')

@section('title','Edit News')

@section('main')
<script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>

<style>
    .ck.ck-editor__editable_inline{
        color:#222;
    }
</style>

<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Edit News</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('latest.news') }}">News</a></li>
                        <li class="breadcrumb-item active">Edit News</li>
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
                    <form action="{{ url('update/news/'.$news->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="form-group my-5">
                            <label for="">News Headline:</label>
                            <input type="text" name="news_headline" class="form-control" value="{{ $news->news_headline }}">
                        </div>

                        <div class="form-group my-5">
                            <label for="">Short Description:</label>
                            <textarea name="short_desc" class="form-control">{{ $news->short_desc }}</textarea>
                        </div>

                        <div class="form-group my-5">
                            <label for="">News Details:</label>
                            <textarea name="news_details" id="editor">{{ $news->news_details }}</textarea>
                        </div>

                        <div class="form-group my-5">
                            <label for="">News Link:</label>
                            <input type="text" name="news_link" class="form-control" value="{{ $news->news_link }}">
                        </div>

                        <div class="form-group my-5">
                            <label for="">Update Status</label><br>
                            <input type="radio" name="status" value="disabled" @if($news->status == 'disabled') checked @endif> Disable
                            <input type="radio" name="status" value="published" @if($news->status == 'published') checked @endif> Publish
                        </div>

                        <div class="form-group">
                            <label for="">Current Cover Image</label><br>
                            <img src="{{ $news->news_cover }}" class="w-25" alt="">
                            <input type="hidden" name="old_cover" value="{{ $news->news_cover }}">
                        </div>
                        <div class="form-group my-5">
                            <label for="">Update Cover Image:</label>
                            <input type="file" name="news_cover" class="form-control my-4">
                        </div>
                    
                        <button type="submit" class="btn btn-success">Update</button>
            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
        console.error( error );
    } );
</script>

@endsection