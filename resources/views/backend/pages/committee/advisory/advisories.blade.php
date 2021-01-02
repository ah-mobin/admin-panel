@extends('backend.layout.master')

@section('title','All Advisor Members')

@section('main')



<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Advisor Committee</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Advisor Committee</li>
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

                    <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#addNewAdvMember">
                       Add New Member
                    </button>

                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Member Name</th>
                                <th>Member Post</th>
                                <th>Member Country</th>
                                <th>Member Photo</th>
                                <th>Position</th>
                                <th>Top Level</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
        
        
                        <tbody>
                            @foreach($advisors as $member)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->post }}</td>
                                    <td>{{ $member->country }}</td>
                                    <td><img src="{{ $member->photo }}" width="100px" alt=""></td>
                                    <td>{{ $member->position }}</td>
                                    <td>
                                        @if($member->top_level == 0)
                                            <span class="badge badge-danger">false</span>
                                        @else
                                            <span class="badge badge-success">true</span>
                                        @endif 
                                    </td>
                                    
                                    <td>
                                        <a href="{{ url('advisor/member/view/'.$member->id) }}"> <i class="fa fa-eye mr-4"></i> </a>
                                        <a href="{{ url('advisor/member/edit/'.$member->id) }}"> <i class="fa fa-edit mr-4"></i> </a>
                                        <a href="{{ url('advisor/member/remove/'.$member->id) }}"> <i class="fa fa-trash"></i> </a>
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
  <div class="modal fade" id="addNewAdvMember" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addNewAdvMemberLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addNewAdvMemberLabel">Add New Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('store.advisor') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="modal-body">

                <div class="form-group">
                    <input type="text" name="name" class="form-control my-4 @error('name') is-invalid @enderror" placeholder="Member Full Name (required)">
                </div>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong style="color:red">{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <input type="text" name="post" class="form-control my-4" placeholder="Post Details">
                </div>

                <div class="form-group">
                    <input type="text" name="country" class="form-control my-4" placeholder="Country">
                </div>

                <div class="form-group">
                    <input type="file" name="photo" class="form-control my-4">
                </div>

                <div class="form-group">
                    <label for="topLevel">What To Place Him/Her at First of YOur List?</label><br>
                    <input type="radio" name="top_level" value="1"> Yes &nbsp;
                    <input type="radio" name="top_level" value="0" checked> No
                </div>

                <div class="form-group">
                    <label for="position">Position:</label><br>
                    <input type="number" name="position" class="form-control @error('position') is-invalid @enderror" value="{{ old('position') }}">
                </div>

                @error('position')
                    <span class="invalid-feedback" role="alert">
                        <strong style="color:red">{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group">
                    <input type="text" name="phone_number" class="form-control my-4" placeholder="Phone Number (optional)">
                </div>

                <div class="form-group">
                    <input type="text" name="email" class="form-control my-4" placeholder="Email Address (optional)">
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