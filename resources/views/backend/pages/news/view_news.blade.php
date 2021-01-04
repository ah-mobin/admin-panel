@extends('backend.layout.master')
@section('title','Show News Details')
@section('main')


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

            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <td width="25%">News Cover</td>
                            <td><img src="{{ $news->news_cover }}" height="100px"></td>
                        </tr>

                        <tr>
                            <td>News Headline</td>
                            <td>{{ $news->news_headline }}</td>
                        </tr>

                        <tr>
                            <td>Short Description</td>
                            <td>{{ $news->short_desc }}</td>
                        </tr>

                        <tr>
                            <td>News Details</td>
                            <td>{{ $news->news_details }}</td>
                        </tr>

                        <tr>
                            <td>News Link</td>
                            <td><a href="{{ $news->news_link }}" target="_blank">Link</a></td>
                        </tr>

                        <tr>
                            <td>Author</td>
                            <td>{{ $news->name }}</td>
                        </tr>

                        <tr>
                            <td>Status</td>
                            <td>{{ $news->status }}</td>
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

@endsection