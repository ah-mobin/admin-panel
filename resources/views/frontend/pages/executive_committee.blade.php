@extends('frontend.layout.master')
@section('title','')

@section('content')

<style>
    
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="trustee_body text-center">
                <h3 class="mb-5">Executive Committee</h3>

                <div class="trustees">

                @if($topLevel->name)
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
                    

                    @foreach($allExecutives as $executive)
                        <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                            <div class="trustee_committee text-center">
                                <div class="trustee_img">
                                @if(empty($executive->photo))
                                    <img src="{{ asset('frontend/images/default.png') }}" class="img-fluid" alt="">
                                @else
                                    <img src="{{ $executive->photo }}" class="img-fluid" alt="">
                                @endif
                                </div>

                                <div class="trustee_info mt-2">
                                <h5 style="font-weight: 600">{{ $executive->name }}</h5>
                                <h6>{{ $executive->post }}</h6>
                                <h6 class="country">{{ $executive->country }}</h6>
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