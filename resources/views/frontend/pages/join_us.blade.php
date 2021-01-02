@extends('frontend.layout.master')
@section('title','Join With Us')

@section('content')


<section class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12">
            <div class="facilities text-center my-5">
                <h2>Why Join With Us?</h2>


                <div class="facility_items">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                                
                                <div class="item">
                                    <div class="icon">
                                        <i class="fa fa-heart"></i>
                                    </div>
    
                                    <div class="facility">
                                        Life Insurance Support
                                    </div>
                                </div>
                                
                            </div>

                            <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                                
                                <div class="item">
                                    <div class="icon">
                                        <i class="fa fa-hospital"></i>
                                    </div>
    
                                    <div class="facility">
                                        Hospital discount
                                    </div>
                                </div>
                                
                            </div>


                            <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                                
                                <div class="item">
                                    <div class="icon">
                                        <i class="fa fa-child"></i>
                                    </div>
    
                                    <div class="facility">
                                        Quota facilities
                                    </div>
                                </div>
                                
                            </div>



                            <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                                
                                <div class="item">
                                    <div class="icon">
                                        <i class="fa fa-sign-language"></i>
                                    </div>
    
                                    <div class="facility">
                                        Loan & Investment
                                    </div>
                                </div>
                                
                            </div>


                            <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                                
                                <div class="item">
                                    <div class="icon">
                                        <i class="fa fa-low-vision"></i>
                                    </div>
    
                                    <div class="facility">
                                        Low support
                                    </div>
                                </div>
                                
                            </div>


                            <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                                
                                <div class="item">
                                    <div class="icon">
                                        <i class="fa fa-link"></i>
                                    </div>
    
                                    <div class="facility">
                                        Business Network
                                    </div>
                                </div>
                                
                            </div>

                            <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                                
                                <div class="item">
                                    <div class="icon">
                                        <i class="fa fa-briefcase"></i>
                                    </div>
    
                                    <div class="facility">
                                        Job support
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="container my-5">

    <div class="member_registration">
        <h2 class="text-center">Member Registration</h2>

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
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        
        @elseif(session()->has('warning'))
            <div class="alert alert-warning">
                {{ session()->get('warning') }}
            </div>
        @elseif(session()->has('not_match_pass'))
            <div class="alert alert-danger">
                {{ session()->get('not_match_pass') }}
            </div>
        @endif

        <form action="{{ route('member.joined') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row">

                <div class="col-md-6 col-lg-6 col-12">
                    
                    <div class="form-group">
                        <label for="memberName">Your Full Name</label>
                        <input type="text" name="full_name" class="form-control" placeholder="Your Passport Name" required value="{{ old('full_name') }}">
                    </div>

                    <div class="form-group">
                        <label for="fatherHusbantName">Father/Husband Name</label>
                        <input type="text" name="father_husband_name" class="form-control" required value="{{ old('father_husband_name') }}">
                    </div>

                    <div class="form-group">
                        <label for="passportNumber">Passport Number</label>
                        <input type="text" name="passport_number" class="form-control" value="{{ old('passport_number') }}" required>
                    </div>


                    <div class="form-group">
                        <label for="currentCountry">Current Country</label>
                        <input type="text" name="current_country" class="form-control" value="{{ old('current_country') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="homeAddress">Home Address</label>
                        <input type="text" name="home_address" class="form-control" value="{{ old('home_address') }}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="workCategory">Category of Work</label>
                        <input type="text" name="category_of_work" class="form-control" value="{{ old('category_of_work') }}" required>
                    </div>

                </div>
                
                <div class="col-md-6 col-lg-6 col-12">
                    
                    

                    <div class="form-group">
                        <label for="currentMobile">Current Mobile Number</label>
                        <input type="text" name="current_mobile_number" class="form-control" value="{{ old('current_mobile_number') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="countriesMobile">Countries Mobile Number</label>
                        <input type="text" name="country_mobile_number" class="form-control" value="{{ old('country_mobile_number') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="imageUpload">Upload Your Image</label>
                        <input type="file" name="member_avatar" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" >
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-info w-100 mt-4">Join</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
</section>


@endsection