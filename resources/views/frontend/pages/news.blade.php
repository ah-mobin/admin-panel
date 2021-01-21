@extends('frontend.layout.master')
@section('title','')

@section('content')

<section class="news_header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <img src="frontend/images/news_top_left.png" class="img-fluid" alt="">
            </div>

            <div class="col-12 col-md-6 col-lg-6">
                <div class="news_top_left">
                    <h3>Protesting expatriates in front of the Bangladesh Embassy in Beirut</h3>
                    <span>Facebook - 25/12/2020</span>
                    <p>"They were protesting peacefully, but were beaten by the embassy and tortured by about 90 policemen, and six were seriously injured in the baton charge."</p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- middle ad -->
    <a href="">
        <img src="frontend/images/mid_ad.png" class="img-fluid" alt="">
    </a>



<section class="latest_news">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-9 col-12">
                <div class="news_section">
                    <h4>Latest News</h4>

                    <div class="news_content">
                        <div class="row">
                            @foreach($news as $single)
                            <div class="col-md-6 col-lg-4 col-sm-6 col-12">
                                <div class="card">
                                    <img class="card-img-top" src="{{ $single->news_cover }}" height="200"  alt="{{ $single->news_headline }}">
                                    <div class="card-body">
                                        <span style="font-size: 14px">{{ Carbon\Carbon::make($single->published_date)->format('d M, y') }}</span>
                                        <h5 class="card-title my-2">{{ $single->news_headline }}</h5>
                                        <p class="card-text my-2">{{ substr($single->short_desc,0,25) }}</p>
                                        <a href="{{ url('news-details/'.$single->news_slug) }}">See details <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                  </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>


                <div class="popular_news">
                    <h4>Popular Quotes</h4>

                    
                    @foreach($quotes as $quote)
                        <div class="popular_item">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 col-sm-12 col-12">
                                    <img src="{{ $quote->speaker_photo }}" class="img-fluid" alt="">
                                </div>

                                <div class="col-md-8 col-lg-8 col-sm-12 col-12">
                                    <p>{{ $quote->quote_speech }}</p>
                                    <span>- {{ $quote->speaker }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-12">
                <div class="ads">
                    <img src="frontend/images/glass.png" class="img-fluid" alt="">
                </div>

                <div class="ads_lands">
                    <img src="frontend/images/ads-portrait.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


@endsection