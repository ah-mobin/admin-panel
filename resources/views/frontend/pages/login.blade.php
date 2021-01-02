@extends('frontend.layout.master')
@section('title','Join With Us')

@section('content')


<section class="container my-5">

    <div class="member_registration">
        <h2 class="text-center">User Login</h2>
                

        <form action="" method="post">
            @csrf

            <div class="row">

                <div class="col-md-3 col-lg-3"></div>
                
                <div class="col-md-6 col-lg-6 col-12 pl-5">
                    
                    <div class="form-group">
                        <label for="userEmail">User Passport ID</label>
                        <input type="text" name="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-success w-100 btn-sm mt-3">Login</button>

                </div>
            </div>
        </form>
    </div>
</section>


@endsection