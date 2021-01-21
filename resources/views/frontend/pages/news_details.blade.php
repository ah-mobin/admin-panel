@extends('frontend.layout.master')
@section('title','News Details')

@section('content')

<div class="container news_details">
    <div class="row">
        <div class="col-12 text-center">
            <h2 class="my-3">{{ $news->news_headline }}</h2>
            <img src="{{ $news->news_cover }}" alt="{{ $news->news_headline }}" class="img-fluid">
            <div class="my-2">
                <small><b>Publisher:</b> {{ $news->publisher->name }}</small><br>
                <small><b>Published Date:</b> {{ Carbon\Carbon::make($news->published_date)->format('d M, y') }}</small>
            </div>
            
        </div>

        <div class="row">
            <div class="col-12">
                <div class="text-center my-5">
                    {!! $news->news_details !!}
                </div>
                <br>
                <b>Reference link:</b> <a href="{{ $news->news_link}}">{{ $news->news_link}}</a>
            </div>
        </div>
    </div>
</div>

@endsection