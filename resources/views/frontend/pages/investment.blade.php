@extends('frontend.layout.master')
@section('title','')

@section('content')



<section id="home" class="w3l-banner py-5">
    <div class="container py-lg-5 py-md-4 mt-lg-0 mt-5">
        <div class="row align-items-center py-lg-5 py-4 mt-4">
            <div class="col-lg-6 col-sm-12 mt-lg-5">
                <h3>An investor should act as though he had a lifetime decision card with just twenty punches on it</h3>
                <div class="separatorhny"></div>
            </div> 
            <div class="col-lg-5 offset-lg-1 col-md-8 col-sm-10 mt-lg-0 mt-5">
                <div class="banner-play-w3 text-lg-center">
                    <!--//video-->
                    <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center pl-3">
                        <span class="video-play-icon">
                            <span class="fa fa-play"></span>
                        </span>
                    </a>

                    <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                    <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                        <iframe src="https://www.youtube.com/embed/f3pY42M3Aq8" frameborder="0"
                            allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                    <!--//video-->
                </div>
            </div>
        </div>
    </div>
</section>




<section class="w3l-index6 py-5 my-4">
    <div class="container py-md-3 text-center">
      <div class="heading text-center mx-auto">
                  <h3 class="head text-white">Strength in Experience <br> Success in Partnership</h3>
                  <p class="my-3 head text-white"> “We approach each potential investment as an opportunity tocreate a long lasting and valuable relationship”
                </p>
                    
                </div>
    </div>
  </section>


<section>
    <div class="w3l-open-block-services py-5" id="services">
        <div class="container py-lg-5 pt-4">
            <div class="heading text-center mx-auto">
                <h3 class="head">We build our relationships through</h3>
                <p class="my-3 head"> Every relationship is unique, and people come together for many different reasons. Part of what defines a healthy relationship is sharing a common goal for exactly what you want the relationship to be and where you want it to go.</p>
                  
              </div>
            <div class="row pt-5 mt-3">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <div class="icon-holder">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <h4 class="mission">Client Focused</h4>
                        <div class="open-description">
                            <p>Customer focus means putting your customers' needs first. Customer-focused businesses a company culture dedicated. </p>
                            <a href="#read">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-md-0 mt-3 pt-md-0 pt-3">
                    <div class="card text-center">
                        <div class="icon-holder">
                            <span>
                                <i class="fas fa-user-check"></i>
                            </span>
                        </div>
                        <h4 class="mission">Client Understanding</h4>
                        <div class="open-description">
                            <p>A digital technology company, understanding the client’s needs and business specifics is essential.</p>
                            <a href="#read">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-3 pt-lg-0 pt-3">
                    <div class="card text-center">
                        <div class="icon-holder">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4 class="mission">Experience Team</h4>
                        <div class="open-description">
                            <p>Experience team is a company focused on creating outstanding experiences for people all over the world.</p>
                            <a href="#read">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-3 pt-lg-0 pt-3">
                    <div class="card text-center">
                        <div class="icon-holder">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <h4 class="mission">Build Value</h4>
                        <div class="open-description">
                            <p>Handle the item as if it is made of glass. The way you handle the product you sell can greatly increase or decrease its value</p>
                            <a href="#read">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center my-5">
                <button type="button" class="btn btn-danger btn-lg">Comming Soon</button>
            </div>
        </div>
    </div>
</section>


@endsection