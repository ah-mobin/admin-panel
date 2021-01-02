@extends('frontend.layout.master')
@section('title','Founding Team')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="trustee_body text-center">
                <h3 class="mb-5">Founding Team</h3>

                <div class="trustees">

                @if($topLevel>0)
                    <div class="row">
                        <div class="col-md-4 col-lg-4"></div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-12">
                            <div class="trustee_committee text-center">
                                <div class="trustee_img">
                                    @if(empty($topLevel->photo))
                                        <img src="{{ asset('frontend/images/default.png') }}" class="img-fluid" alt="">
                                    @else
                                        <img src="{{ $topLevel->photo }}" class="img-fluid" alt="">
                                    @endif
                                </div>

                                <div class="trustee_info mt-2">
                                    <h5 style="font-weight: 600">{{ $topLevel->name }}</h5>
                                    <h6>{{ $topLevel->post }}</h6>
                                    <h6 class="country">{{ $topLevel->country }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif    

                <div class="row">
                    

                    @foreach($allFounders as $founder)
                        <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                            <div class="trustee_committee text-center">
                                <div class="trustee_img">
                                @if(empty($founder->photo))
                                    <img src="{{ asset('frontend/images/default.png') }}" class="img-fluid" alt="">
                                @else
                                    <img src="{{ $founder->photo }}" class="img-fluid" alt="">
                                @endif
                                </div>

                                <div class="trustee_info mt-2">
                                <h5 style="font-weight: 600">{{ $founder->name }}</h5>
                                <h6>{{ $founder->post }}</h6>
                                <h6 class="country">{{ $founder->country }}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection