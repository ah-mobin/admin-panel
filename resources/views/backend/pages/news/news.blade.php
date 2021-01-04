@extends('backend.layout.master')
@section('title','All News')
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
                        <li class="breadcrumb-item active">News</li>
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
                <div class="col-sm-12">

                    <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#addNewNews">
                       Add New News
                    </button>

                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#SL</th>
                                <th>News Cover</th>
                                <th>News Headline</th>
                                <th>Publisher</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
        
        
                        <tbody>
                            @foreach($allNews as $news)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ $news->news_cover }}" width="100px" alt=""></td>
                                    <td>{{ $news->news_headline }}</td>
                                    <td>{{ $news->name }} <br> <small style="color:#666">{{ $news->role }}</small> </td>
                                    <td>{{ $news->published_date }}</td>
                                    <td>{{ $news->status }}</td>
                                    <td>
                                        <a href="{{ url('news/details/'.$news->id) }}"> <i class="fa fa-eye mr-4"></i> </a>
                                        @if($news->publisher_id == Auth::id() || Auth::user()->role == 'admin')
                                            <a href="{{ url('news/edit/'.$news->id) }}"> <i class="fa fa-edit mr-4"></i> </a>
                                            <a href="{{ url('news/remove/'.$news->id) }}"> <i class="fa fa-trash"></i> </a>
                                        @endif
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
  <div class="modal fade" id="addNewNews" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addNewNewsLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addNewNewsLabel">Add News</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('store.news') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="modal-body">

                <div class="form-group my-5">
                    <label for="">News Headline:</label>
                    <input type="text" name="news_headline" class="form-control" placeholder="News Headline (required)">
                </div>

                <div class="form-group my-5">
                    <label for="">Short Description:</label>
                    <textarea name="short_desc" class="form-control"></textarea>
                </div>

                <div class="form-group my-5">
                    <label for="">News Details:</label>
                    <textarea name="news_details" id="editor"></textarea>
                </div>

                <div class="form-group my-5">
                    <label for="">News Link:</label>
                    <input type="text" name="news_link" class="form-control">
                </div>

                <div class="form-group my-5">
                    <input type="file" name="news_cover" class="form-control my-4">
                </div>
                
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Add News</button>
            </div>

        </form>
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