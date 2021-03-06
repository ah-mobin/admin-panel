@extends('frontend.layout.master')
@section('title','Activities')

@section('content')

<section class="news_header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <img src="{{ asset('frontend/images/Rectangle.png') }}" class="img-fluid" alt="">
            </div>

            <div class="col-12 col-md-6 col-lg-6">
                <div class="news_top_left">
                    <h3>Grand Opening Party</h3>
                    <span>15/09/2020</span>
                    <p>Non Resident Bangladeshi – Global(NRB Global) is going to celebrate the grand opening at 27th September, 2020. This celebration will be celebrated virtually. All the respected members will join the live conversation. The program will start at BD time 11:00PM on Facebook official page and YouTube Chanel, NRB Global.</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <div class="activity_section">
        <section class="container-fluid">
        <h3>We provide you support with</h3>

        <div class="row">
            <div class="col-md-6 col-lg-6 col-12">
                <div class="activity_item" style="background-image:url(frontend/images/Group11.png); text-align: left;">
                    <h3>Consultant</h3>
                </div>
            </div>    

            <div class="col-md-6 col-lg-6 col-12">
                <div class="activity_item" style="background-image:url(frontend/images/jobsupport.png);text-align: right;">
                    <h3>Job <br>Support</h3>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-12">
                <div class="activity_item" style="background-image:url(frontend/images/businesssupport.png);text-align: left;">
                    <h3>Business <br>Support</h3>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-12">
                <div class="activity_item" style="background-image:url(frontend/images/e_doc.png);text-align: right;">
                    <h3>E-Doctor</h3>
                </div>
            </div>    
        
            <div class="col-md-6 col-lg-6 col-12">
                <div class="activity_item" style="background-image:url(frontend/images/deadbody.png);text-align: left;">
                    <h3>Dead Body<br>Support</h3>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-12">
                <div class="activity_item" style="background-image:url(frontend/images/law.png);text-align: right;">
                    <h3>Law<br>Support</h3>
                </div>
            </div>  
        </div>

        <div class="row">
            <div class="col-md-3 col-lg-3"></div>
            <div class="col-md-6 col-lg-6 col-12">
                <div class="activity_item" style="background-image:url(frontend/images/relif.png);text-align: center;">
                    <h3 style="padding-top: 50px">Relief</h3>
                </div>
            </div>
        </div>
    </section>
    </div>


@endsection