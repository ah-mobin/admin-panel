@extends('backend.layout.master')
@section('title','Show News Details')
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
                    <h4 class="page-title">News</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('latest.news') }}">News</a></li>
                        <li class="breadcrumb-item active">View News</li>
                    </ol>
                </div>
            </div>


            <img src="{{ $news->news_cover }}" class="img-fluid" alt="">
            <h2>{{ $news->news_headline }}</h2>
            <small><b>Author:</b> {{ $news->name }}</small>
            <small><b>Status:</b> {{ $news->status }}</small>
            <hr>
            <h6>Short Description</h6>
            <p>{{ $news->short_desc }}</p>

            <hr>
            <h6>Details News</h6>
            {!! $news->news_details !!}
                    

            <div class="row">
                <div class="col-12">
                    
                    

                    <table class="table table-responsive">
                        <tr>
                            <td>Reference Link</td>
                            <td><a href="{{ $news->news_link }}" target="_blank">{{ $news->news_link }}</a></td>
                        </tr>

                        <tr>
                            <td>Created Date</td>
                            <td>{{ Carbon\Carbon::make($news->created_at)->format('d-m-y h:i A') }}</td>
                        </tr>

                        <tr>
                            <td>Published Date</td>
                            <td>
                                @if(!empty($news->published_date)) 
                                    {{ Carbon\Carbon::make($news->published_date)->format('d-m-y h:i A') }}
                                @endif
                            </td>
                            
                        </tr>

                    </table>
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