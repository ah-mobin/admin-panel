@extends('backend.layout.master')
@section('title','All Quotes')
@section('main')


<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Quotes</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Quotes</li>
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

                    <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#addNewQuote">
                       Add New Quote
                    </button>

                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Quote Speech</th>
                                <th>Speaker Name</th>
                                <th>Speaker Photo</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
        
        
                        <tbody>
                            @foreach($quotes as $quote)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $quote->quote_speech }}</td>
                                    <td>{{ $quote->speaker }}</td>
                                    <td><img src="{{ $quote->speaker_photo }}" width="100px" alt=""></td>
                                    <td><span class="badge badge-primary">{{ $quote->status }}</span></td>
                                    <td>
                                        <a href="{{ url('quote/edit/'.$quote->id) }}"> <i class="fa fa-edit mr-4"></i> </a>
                                        <a href="{{ url('quote/remove/'.$quote->id) }}"> <i class="fa fa-trash"></i> </a>
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
  <div class="modal fade" id="addNewQuote" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addNewQuoteLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addNewQuoteLabel">Add New Quote</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('store.quote') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="modal-body">

                <div class="form-group my-5">
                    <label for="">Quote Speech:</label>
                    <textarea name="quote_speech" class="form-control"></textarea>
                </div>

                <div class="form-group my-5">
                    <label for="">Speaker Name:</label>
                    <input type="text" name="speaker" class="form-control">
                </div>

                <div class="form-group my-5">
                    <label for="">Speaker Photo:</label>
                    <input type="file" name="speaker_photo" class="form-control my-4">
                </div>
                
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Add New</button>
            </div>

        </form>
      </div>
    </div>
  </div>

@endsection