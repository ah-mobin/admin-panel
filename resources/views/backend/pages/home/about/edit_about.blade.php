@extends('backend.layout.master')

@section('title','Edit About Content')

@section('main')
<script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>

<style>
    .ck.ck-editor__editable_inline{
        color:#222;
    }
</style>


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">About Content Edit</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('abouts') }}">About Content</a></li>
                        <li class="breadcrumb-item active">About Content Edit</li>
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
                <div class="col-sm-12 col-md-10 col-lg-10">

                    <form action="{{ url('update/about/'.$about->id) }}" method="post">
                        @csrf
        
                        <div class="form-group">
                            <textarea name="about_content" id="editor">{{ $about->about_content }}</textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="status">Status</label><br>
                            <input type="radio" name="status" value="enabled" @if( $about->status == 'enabled') checked @endif> Enable &nbsp;

                            <input type="radio" name="status" value="disabled" @if( $about->status == 'disabled') checked @endif> Disable
                        </div>
                        <button type="submit" class="btn btn-success">Update Content</button>
                        
            
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