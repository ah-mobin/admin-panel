
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
                                <div class="btn-group pull-right m-t-15">
                                    <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings</button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#">Dropdown One</a>
                                        <a class="dropdown-item" href="#">Dropdown Two</a>
                                        <a class="dropdown-item" href="#">Dropdown Three</a>
                                        <a class="dropdown-item" href="#">Dropdown Four</a>
                                    </div>
                                </div>

                                <h4 class="page-title">Dashboard</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Ubold</a></li>
                                    <li class="breadcrumb-item"><a href="#">eCommerce</a></li>
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


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0">Total Revenue</h4>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="text-center">
                                                <ul class="list-inline chart-detail-list">
                                                    <li class="list-inline-item">
                                                        <h5><i class="fa fa-circle m-r-5" style="color: #36404a;"></i>Desktops</h5>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>Tablets</h5>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <h5><i class="fa fa-circle m-r-5" style="color: #bbbbbb;"></i>Mobiles</h5>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div id="morris-area-with-dotted" style="height: 300px;"></div>

                                        </div>



                                        <div class="col-md-4">

                                            <p class="font-600">iMacs <span class="text-primary pull-right">80%</span></p>
                                            <div class="progress m-b-30">
                                                <div class="progress-bar progress-bar-primary progress-animated wow animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                </div><!-- /.progress-bar .progress-bar-danger -->
                                            </div><!-- /.progress .no-rounded -->

                                            <p class="font-600">iBooks <span class="text-pink pull-right">50%</span></p>
                                            <div class="progress m-b-30">
                                                <div class="progress-bar progress-bar-pink progress-animated wow animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                                </div><!-- /.progress-bar .progress-bar-pink -->
                                            </div><!-- /.progress .no-rounded -->

                                            <p class="font-600">iPhone 5s <span class="text-info pull-right">70%</span></p>
                                            <div class="progress m-b-30">
                                                <div class="progress-bar progress-bar-info progress-animated wow animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                </div><!-- /.progress-bar .progress-bar-info -->
                                            </div><!-- /.progress .no-rounded -->

                                            <p class="font-600">iPhone 6 <span class="text-warning pull-right">65%</span></p>
                                            <div class="progress m-b-30">
                                                <div class="progress-bar progress-bar-warning progress-animated wow animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div><!-- /.progress-bar .progress-bar-warning -->
                                            </div><!-- /.progress .no-rounded -->

                                            <p class="font-600">iPhone 6s <span class="text-success pull-right">40%</span></p>
                                            <div class="progress m-b-30">
                                                <div class="progress-bar progress-bar-success progress-animated wow animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                </div><!-- /.progress-bar .progress-bar-success -->
                                            </div><!-- /.progress .no-rounded -->


                                        </div>



                                    </div>

                                    <!-- end row -->

                                </div>

                            </div>



                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <a href="#" class="pull-right btn btn-default btn-sm waves-effect waves-light">View All</a>
                                    <h4 class="header-title m-t-0">Recent Orders</h4>
                                    <p class="text-muted m-b-30 font-13">
                                        Your awesome text goes here.
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table table-actions-bar">
                                            <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Order Date</th>
                                                <th>Order Number</th>
                                                <th>Amount</th>
                                                <th style="min-width: 80px;">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><img src="assets/images/products/iphone.jpg" class="thumb-sm" alt=""> </td>
                                                <td>08/10/2015</td>
                                                <td><a href="#">UB#160924</a></td>
                                                <td>$1,256</td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><img src="assets/images/products/samsung.jpg" class="thumb-sm" alt=""> </td>
                                                <td>08/10/2015</td>
                                                <td><a href="#">UB#160923</a></td>
                                                <td>$2,562</td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><img src="assets/images/products/lumia.jpg" class="thumb-sm" alt=""> </td>
                                                <td>08/10/2015</td>
                                                <td><a href="#">UB#160922</a></td>
                                                <td>$6,458</td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><img src="assets/images/products/imac.jpg" class="thumb-sm" alt=""> </td>
                                                <td>07/10/2015</td>
                                                <td><a href="#">UB#160921</a></td>
                                                <td>$1,256</td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><img src="assets/images/products/macbook.jpg" class="thumb-sm" alt=""> </td>
                                                <td>07/10/2015</td>
                                                <td><a href="#">UB#160920</a></td>
                                                <td>$7,521</td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><img src="assets/images/products/samsung.jpg" class="thumb-sm" alt=""> </td>
                                                <td>06/10/2015</td>
                                                <td><a href="#">UB#160920</a></td>
                                                <td>$7,521</td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div> <!-- end col -->


                            <div class="col-lg-6">
                                <div class="card-box">
                                    <a href="#" class="pull-right btn btn-default btn-sm waves-effect waves-light">View All</a>
                                    <h4 class="header-title m-t-0">Popular Products</h4>
                                    <p class="text-muted m-b-30 font-13">
                                        Your awesome text goes here.
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table table-actions-bar">
                                            <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Addded Date</th>
                                                <th>Orders</th>
                                                <th>Amount</th>
                                                <th style="min-width: 80px;">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><img src="assets/images/products/iphone.jpg" class="thumb-sm" alt=""> </td>
                                                <td>08/10/2015</td>
                                                <td><b>22</b></td>
                                                <td>$1,256</td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><img src="assets/images/products/samsung.jpg" class="thumb-sm" alt=""> </td>
                                                <td>08/10/2015</td>
                                                <td><b>35</b></td>
                                                <td>$2,562</td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><img src="assets/images/products/lumia.jpg" class="thumb-sm" alt=""> </td>
                                                <td>08/10/2015</td>
                                                <td><b>20</b></td>
                                                <td>$6,458</td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><img src="assets/images/products/imac.jpg" class="thumb-sm" alt=""> </td>
                                                <td>07/10/2015</td>
                                                <td><b>5</b></td>
                                                <td>$1,256</td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><img src="assets/images/products/macbook.jpg" class="thumb-sm" alt=""> </td>
                                                <td>07/10/2015</td>
                                                <td><b>10</b></td>
                                                <td>$7,521</td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><img src="assets/images/products/samsung.jpg" class="thumb-sm" alt=""> </td>
                                                <td>06/10/2015</td>
                                                <td><b>7</b></td>
                                                <td>$7,521</td>
                                                <td>
                                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div> <!-- end col -->

                        </div>

                    </div> <!-- container -->

                </div> <!-- content -->

                @includeIf('backend.layout.copyright');

            </div>

@endsection


@section('script')


@endsection