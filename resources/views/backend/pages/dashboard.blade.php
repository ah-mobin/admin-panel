
@extends('backend.layout.master')

@section('title','Dashboard')

@section('main')

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">

                                <h4 class="page-title">Dashboard</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="widget-panel widget-style-2 card-box">
                                    <i class="md md-attach-money text-primary"></i>
                                    <h2 class="m-0 counter font-600">50568</h2>
                                    <div class="text-muted m-t-5">Total Revenue</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="widget-panel widget-style-2 card-box">
                                    <i class="md md-add-shopping-cart text-pink"></i>
                                    <h2 class="m-0 counter font-600">1256</h2>
                                    <div class="text-muted m-t-5">Orders</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="widget-panel widget-style-2 card-box">
                                    <i class="md md-store-mall-directory text-info"></i>
                                    <h2 class="m-0 counter font-600">18</h2>
                                    <div class="text-muted m-t-5">Stores</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="widget-panel widget-style-2 card-box">
                                    <i class="md md-account-child text-custom"></i>
                                    <h2 class="m-0 counter font-600">85</h2>
                                    <div class="text-muted m-t-5">Sellers</div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- container -->

                </div> <!-- content -->

                @includeIf('backend.layout.copyright');

            </div>

@endsection


@section('script')


@endsection