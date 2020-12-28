@extends('frontend.layout.master')
@section('title','')

@section('content')

<section id="home" class="w3l-banner py-5">
    <div class="container py-lg-5 py-md-4 mt-lg-0 mt-5">
        <div class="row align-items-center py-lg-5 py-4 mt-4">
            <div class="col-sm-12 mt-lg-4">
                <h3>Don't feel ashamed when giving little for charity; That is beacuse thereis always goodness in giving no matter how little. </h3>
                <div class="separatorhny"></div>
            </div>
        </div>
    </div>
</section>

<section class="w3l-specification-6">
    <div class="specification-6-mian py-5 my-5">
        <div class="container">
            <div class="row story-6-grids">
                <div class="col-lg-10 story-gd pl-lg-4  text-center mx-auto">
                    <div class="skill_info mt-lg-5 pt-lg-4">
                        <div class="stats_left">
                            <div class="counter_grid">
                                <div class="icon_info">
                                    <p class="counter">65</p>
                                    <h4>YEARS</h4>

                                </div>
                            </div>
                        </div>
                        <div class="stats_left">
                            <div class="counter_grid">
                                <div class="icon_info">
                                    <p class="counter">210</p>
                                    <h4>DONORS</h4>
                                </div>
                            </div>
                        </div>
                        <div class="stats_left">
                            <div class="counter_grid">
                                <div class="icon_info">
                                    <p class="counter">463</p>
                                    <h4>DOLLORS</h4>

                                </div>
                            </div>
                        </div>
                        <div class="stats_left">
                            <div class="counter_grid">
                                <div class="icon_info">
                                    <p class="counter">5063</p>
                                    <h4>PROJECTS</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 border border-2">
                <div class="row">
                    <div class="col-3">
                        <div>
                            <p>1</p>
                        </div>
                    </div>
                    <div class="col-9">
                        <p>Donate to <span style="color:red">RFB</span></p>

                    </div>
                    
                </div>
                <form>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Country</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="country">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter email">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-3">
                        <div>
                            <p>2</p>
                        </div>
                    </div>
                    <div class="col-9">
                        <p> <span style="color:red">Payment</span></p>
                    </div>
                </div>
                <div>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="Cardname" aria-describedby="emailHelp" placeholder="">
                          </div>
                        <div class="form-group">
                          <label for="Cardname">Name of card/bkash number</label>
                          <input type="text" class="form-control" id="Cardname" aria-describedby="emailHelp" placeholder="Enter Card name or bkash">
                        </div>
                        <div class="form-group">
                          <label for="Cardno">Card no./mobile</label>
                          <input type="text" class="form-control" id="Cardno" aria-describedby="emailHelp" placeholder="Enter Card no">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</section>





@endsection




@section('script')

<script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.countup.js') }}"></script>
<script>
    $('.counter').countUp();
</script>

@endsection