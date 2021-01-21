@extends('frontend.layout.master')
@section('title','Home')
@section('content')

<section class="w3l-main-slider position-relative" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            
            @foreach($sliders as $slider)
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2" style="background: url('{{ $slider->slider_image }}')">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg text-left">
                                    <h5>{{ $slider->slider_heading_one }}</h5>
                                    <h3>{{ $slider->slider_heading_two }}</h3>
                                    <h5>{{ $slider->slider_heading_three }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            @endforeach
        </div>
        
        <div class="scrollhny-btn">
            <a class="btn-btmhny scroll" href="#about">
                <div class="scroll-arrow"></div>
                <div class="scroll-arrow"></div>
                <div class="scroll-arrow"></div>
            </a>
        </div>
    </div>
</section>


<marquee width="100%" direction="left" scrollamount="2" class="py-2" style="font-size: 20px; background-color: #444; color: #fff; font-weight: 600">
    Welcome To NRB Global
</marquee>




<section id="about">
    <div class="container my-5">
        <div class="row">
            <div class="col-12">

                <div class="row">
                    <div class="col-12">
                        <div class="about_content">
                            {!! $about->about_content !!}
                        </div>
                    </div>
                </div>
                
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <div class="vision_mission text-center mt-5 mb-4">
                    <h5>OUR</h5>
                    <h2>VISION & MISSION</h2>
                </div>

                {!! $visionMission->vision_mission_content !!}
            </div>
        </div>

    </div> 
</section>