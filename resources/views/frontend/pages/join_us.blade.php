@extends('frontend.layout.master')
@section('title','Join With Us')

@section('content')


<section class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12">
            <div class="facilities text-center my-5">
                <h2>Our Facilities</h2>


                <div class="facility_items">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-3 col-lg-3 col-sm-4 col-6">
                                
                                <div class="item">
                                    <div class="icon">
                                        <i class="fa fa-user"></i>
                                    </div>
    
                                    <div class="facility">
                                        Life Insurance Support (minimum BDT 1,00,000 Taka)
                                    </div>
                                </div>
                                
                            </div>

                            <div class="col-md-3 col-lg-3 col-sm-4 col-6">
                                
                                <div class="item">
                                    <div class="icon">
                                        <i class="fa fa-user"></i>
                                    </div>
    
                                    <div class="facility">
                                        Partner Hospital discount facilities for family member
                                    </div>
                                </div>
                                
                            </div>


                            <div class="col-md-3 col-lg-3 col-sm-4 col-6">
                                
                                <div class="item">
                                    <div class="icon">
                                        <i class="fa fa-user"></i>
                                    </div>
    
                                    <div class="facility">
                                        Quota facilities for spouse/Child abroad & different service
                                    </div>
                                </div>
                                
                            </div>



                            <div class="col-md-3 col-lg-3 col-sm-4 col-6">
                                
                                <div class="item">
                                    <div class="icon">
                                        <i class="fa fa-user"></i>
                                    </div>
    
                                    <div class="facility">
                                        Loan & Investment opportunity
                                    </div>
                                </div>
                                
                            </div>


                            <div class="col-md-3 col-lg-3 col-sm-4 col-6">
                                
                                <div class="item">
                                    <div class="icon">
                                        <i class="fa fa-user"></i>
                                    </div>
    
                                    <div class="facility">
                                        Low support
                                    </div>
                                </div>
                                
                            </div>


                            <div class="col-md-3 col-lg-3 col-sm-4 col-6">
                                
                                <div class="item">
                                    <div class="icon">
                                        <i class="fa fa-user"></i>
                                    </div>
    
                                    <div class="facility">
                                        Business Network
                                    </div>
                                </div>
                                
                            </div>

                            <div class="col-md-3 col-lg-3 col-sm-4 col-6">
                                
                                <div class="item">
                                    <div class="icon">
                                        <i class="fa fa-user"></i>
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
                   
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        <form action="{{ route('member.joined') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row">

                <div class="col-md-6 col-lg-6 col-12 pr-5">
                    
                    <div class="form-group">
                        <label for="memberName">Your Full Name</label>
                        <input type="text" name="full_name" class="form-control" placeholder="Your Passport Name" required>
                    </div>

                    <div class="form-group">
                        <label for="fatherHusbantName">Father/Husbant Name</label>
                        <input type="text" name="father_husbant_name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="passportNumber">Passport Number</label>
                        <input type="text" name="passport_number" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <label for="currentCountry">Current Country</label>
                        <input type="text" name="current_ountry" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="homeAddress">Home Address</label>
                        <input type="text" name="home_address" class="form-control" required>
                    </div>
                    
                </div>
                
                <div class="col-md-6 col-lg-6 col-12 pl-5">
                    
                    <div class="form-group">
                        <label for="workCategory">Category of Work</label>
                        <input type="text" name="work_category" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="currentMobile">Current Mobile Number</label>
                        <input type="text" name="current_mobile" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="countriesMobile">Countries Mobile Number</label>
                        <input type="text" name="countries_mobile" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="imageUpload">Upload Your Image</label>
                        <input type="file" name="member_avatar" class="form-control" >
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