@extends('frontend.layout.master')
@section('title','')

@section('content')

<style>
    
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="trustee_body">
                <h3>Executive Committee</h3>

                <div class="trustees">

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

                    {{-- <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/teams/Ismail Bin Hamid.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">Ismail Bin Hamid</h5>
                                <h6>Vice President</h6>
                                <h6 class="country"> - </h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/teams/IMG_06511.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">Ali Amjad Khan</h5>
                                    <h6>General Secretary</h6>
                                    <h6 class="country">Malaysia </h6>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/dummy.png" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">Newton Saroar</h5>
                                    <h6>Joint secretary</h6>
                                    <h6 class="country">UK</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/teams/Mizan Farhadi.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">Mizan Farhadi</h5>
                                    <h6>Joint secretary</h6>
                                    <h6 class="country">Oman </h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/teams/Rashad M. Khan.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">Rashad M. Khan</h5>
                                    <h6>Joint secretary</h6>
                                    <h6 class="country">France </h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/dummy.png" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">Mohammad Ismail Bhuiyan</h5>
                                    <h6>Organising Secretary</h6>
                                    <h6 class="country">Cyprus</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/dummy.png" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">Md Kawsar Alam</h5>
                                    <h6>Joint Organising Secretary</h6>
                                    <h6 class="country">KSA</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/teams/AB Barek.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">AB Barek</h5>
                                    <h6>Treasurer</h6>
                                    <h6 class="country">Italy </h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/dummy.png" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                                    <h5 style="font-weight: 600">Rozina Yasmin</h5>
                                    <h6>Secretary of International affairs </h6>
                                    <h6 class="country">USA</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/teams/AR Titu.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">AR Titu</h5>
                                    <h6>Secretary of Bangladesh affairs</h6>
                                    <h6 class="country">Bangladesh</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/teams/MamunMinnat.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">Mamun Minnat</h5>
                                    <h6>Secretary of Innovation & Idea project</h6>
                                    <h6 class="country">Bangladesh</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/teams/Mamun Ahammed.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">Mamun Ahammed</h5>
                                    <h6>Secretary of Relief & social welfare</h6>
                                    <h6 class="country">KSA</h6>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/teams/Anwar E Taslima Protha.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">Anwar E Taslima Protha</h5>
                                    <h6>Secretary of Humanrights & Legal </h6>
                                    <h6 class="country">Switzerland </h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/teams/Monimul Sheikh.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">Monimul Sheikh</h5>
                                    <h6>Secretary of Relationship development</h6>
                                    <h6 class="country">KSA </h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/dummy.png" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">Abdul Khalek</h5>
                                    <h6>Secretary of Business</h6>
                                    <h6 class="country">Qatar </h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/teams/Kawsar Alam.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">Kawsar Alam</h5>
                                    <h6>Secretary of Information & Research </h6>
                                    <h6 class="country">KSA</h6>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/teams/Mortuja Ali Sarker.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">Mortuja Ali Sarker</h5>
                                    <h6>Secretary of Human Resource</h6>
                                    <h6 class="country">-</h6>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/teams/Ahmed Faysal.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">Ahmed Faysal</h5>
                                    <h6>Secretary of Health</h6>
                                    <h6 class="country">Singapore </h6>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/teams/Miah M. Raju.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">Miah M. Raju</h5>
                                    <h6>Secretary of Education & Training</h6>
                                    <h6 class="country"> - </h6>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/teams/Monir Khan.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">Monir Khan</h5>
                                    <h6>Labor Secretary</h6>
                                    <h6 class="country"> - </h6>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/teams/Ahmed Bulbul.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">Ahmed Bulbul</h5>
                                    <h6>Planning Secretary</h6>
                                    <h6 class="country"> - </h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/teams/Mamunul Hasan JCD.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">Mamunul Hasan JCD</h5>
                                    <h6> Office Secretary </h6>
                                    <h6 class="country"> Malaysia </h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/teams/jashim.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">JM Jasim Uddin</h5>
                                    <h6>Secretary of Religious </h6>
                                    <h6 class="country"> - </h6>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/teams/Bulbul Ahmed.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600">Name: Bulbul Ahmed</h5>
                                    <h6>Executive Member </h6>
                                    <h6 class="country"> - </h6>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/teams/Jubayed Uddin Rahol.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600"> Jubayed Uddin Rahol</h5>
                                    <h6> Executive Member</h6>
                                    <h6 class="country"> - </h6>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                        <div class="trustee_committee text-center">
                            <div class="trustee_img">
                            <img src="frontend/images/teams/hoq.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="trustee_info mt-2">
                            <h5 style="font-weight: 600"> Hoque salman</h5>
                                    <h6>Executive Member</h6>
                                    <h6 class="country"> - </h6>
                            </div>
                        </div>
                    </div> --}}


                </div>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection