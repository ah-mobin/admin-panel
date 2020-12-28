@extends('frontend.layout.master')
@section('content')

<section class="w3l-main-slider position-relative" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg text-left">
                                    <h5>Welcome to <br>
                                    Remittance Fighters<br>
                                    Of Bangladesh</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                    <div class="slider-info  banner-view banner-top1 bg bg2">
                        <div class="banner-info">
                            <div class="container p-0 m-0">
                                <div class="banner-info-bg text-left">
                                    <h5>Welcome to </h5>
                                    <h5>Remittance Fighters</h5>
                                    <h5>Of Bangladesh</h5>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top2 bg bg2">
                        <div class="banner-info">
                            <div class="container p-0 m-0">
                                <div class="banner-info-bg text-left">
                                    <h5>Welcome to </h5>
                                    <h5>Remittance Fighters</h5>
                                    <h5>Of Bangladesh</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top3 bg bg2">
                        <div class="banner-info">
                            <div class="container p-0 m-0">
                                <div class="banner-info-bg text-left">
                                    <h5>Welcome to </h5>
                                    <h5>Remittance Fighters</h5>
                                    <h5>Of Bangladesh</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
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




<section id="about">
    <div class="container-fluid my-5">
        <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                    <div class="about_content">
                        <p>Welcome to <b>Remittance Fighters of Bangladesh(RFB)</b>. It’s a non-political organization of Bangladeshis living abroad, who works there and sent their income to country. There are about 15 Million Bangladeshis all over the world. RFB is the bridge between Bangladesh and the Bangladeshi workers living abroad.</p>
                        <p>Foreign currency remitted by the Bangladeshis constitutes a large part of national economy: amounting almost high as 15% of GDP in some year. For sending hefty remittance, each remittance fighter is a 'Brand Ambassador' aboard for our homeland.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6  col-sm-12 col-12">
                    <div class="about_image">
                        <img src="frontend/images/slides.png" alt="" class="img-fluid">
                    </div>
                </div>  

            </div>
        </div>
    </div> 
</section>



<section class="container-fluid">
    <div class="row">
        <div class="col-md-9 col-lg-9 col-12">
            <div class="vision_mission text-center mb-5">
                <h5>OUR</h5>
                <h2>VISION & MISSION</h2>
            </div>
            <h4 style="text-decoration:underline;">Our main missions and visions are.</h4>
            
            <div class="vision_mission_content">
                <ol>
                    <li>Serve the RFB's across the global.</li>
                    <li>Unite successful Bangladeshi origin under one Global platform to share ideas, leverage knowledge, connect with each other, create new ventures, create awareness of RFB’s issues.</li>
                    <li>Bridge the gap between RFB’s and Bangladesh government so that Bangladesh can take advantages of her RFB’s knowledge and expertise for development of Bangladesh as well as RFB get the opportunity to communicate and dialog with government officials in policy level to resolve NRB'S related issues.</li>
                </ol>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-12">
            <div >
                <img src="frontend/images/Rectangle 168.png" class="img-fluid add-banner" alt="">
            </div>
        </div>
    </div>
</section>



<div class="container-fluid">
    <div class="gallery">
        <h3>Gallery</h3>
    
        <div class="row">
            
            <div class="col-md-4">
                <a href="frontend/images/6.jpg" data-lightbox="example-set" class="mb-4"
                data-title="lorem ipsum dolor sit amet">
                <figure>
                <img src="frontend/images/6.jpg" alt="product" class="img-fluid">
                </figure>
                </a>
                <a href="frontend/images/1.jpg" data-lightbox="example-set" class="mb-md-0 mb-4" data-title="lorem ipsum dolor sit amet">
                <figure>
                <img src="frontend/images/1.jpg" alt="product" class="img-fluid">
                </figure>
                </a>
            </div>

            <div class="col-md-4">
                <a href="frontend/images/2.jpg" data-lightbox="example-set" class="mb-4"
                data-title="lorem ipsum dolor sit amet">
                <figure>
                <img src="frontend/images/2.jpg" alt="product" class="img-fluid">
                </figure>
                </a>
                <a href="frontend/images/3.jpg" data-lightbox="example-set" class="mb-md-0 mb-4" data-title="lorem ipsum dolor sit amet">
                <figure>
                <img src="frontend/images/3.jpg" alt="product" class="img-fluid">
                </figure>
                </a>
            </div>

            <div class="col-md-4">
                <a href="frontend/images/4.jpg" data-lightbox="example-set" class="mb-4"
                data-title="lorem ipsum dolor sit amet">
                <figure>
                <img src="frontend/images/4.jpg" alt="product" class="img-fluid">
                </figure>
                </a>
                <a href="frontend/images/img4.png" data-lightbox="example-set" data-title="lorem ipsum dolor sit amet">
                <figure>
                <img src="frontend/images/7.jpg" alt="product" class="img-fluid">
                </figure>
                </a>
            </div>

        </div>
    </div>
</div>


@endsection