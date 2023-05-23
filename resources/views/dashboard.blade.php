
@extends('layout.app')

@section('title', 'Dashboard')

@section('conten')


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                                        <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">Dashboard</h2>
        </div>
    </header>
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Dashboard Counts Section-->

                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="card-box widget-box-two widget-two-primary">
                                    <i class="mdi  mdi mdi-account-multiple widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p style="font-size: 150%" class="m-0 text-uppercase font-600 font-secondary text-overflow" title="ORDER READY">PTIT</p>
                                        <h1 class="text-white counter" data-count="50">0</span></h1>
                                        <p style="font-size: 100%" class="m-0"><b>Siswa</b></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-primary">
                                    <i class="mdi  mdi mdi-account-multiple widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p style="font-size: 150%" class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">SMA</p>
                                            <h1 class="text-white counter" data-count="1500">0</span></h1>
                                        <p style="font-size: 100%" class="m-0"><b>Siswa</b></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-primary">
                                    <i class="mdi  mdi mdi-account-multiple widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p style="font-size: 150%" class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">SMP</p>
                                            <h1 class="text-white counter" data-count="1500">0</span></h1>
                                        <p style="font-size: 100%" class="m-0"><b>Siswa</b></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-primary">
                                    <i class="mdi  mdi mdi-account-multiple widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p style="font-size: 150%" class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">SD</p>
                                            <h1 class="text-white counter" data-count="1500">0</span></h1>
                                        <p style="font-size: 100%" class="m-0"><b>Siswa</b></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-danger">
                                    <i class="mdi mdi-briefcase-download widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">payment DUE</p>
                                        <h2 class="text-white counter" data-count="3250">0</span></h2>
                                        <p class="m-0"><b>Total</b></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-info">
                                    <i class="mdi mdi-account-convert widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">STAFF</p>
                                         <h2 class="text-white counter" data-count="50">0</span></h2>
                                        <p class="m-0"><b>Total</b></p>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                       <!-- Count section end -->

                            <!-- Updates Section -->
                                <!-- <div class="row">
                                    <div class="col-lg-6 col-md-10">
                                        <div class="card-box">
                                            
                                        </div>
                                     </div>
                                    <div class="col-lg-6 col-md-10">
                                        <div class="card-box">
                                            

                                        </div>
                                     </div>

                                </div>     --> 

                               
                          
                           <!--  logo slider -->

                            <div class="row card-box">
                                <div class="col-md-12">
                                        <div id="Carousel" class="carousel slide">
                                            <center> <h3>PROFILE GURU</h3> </center>
                                        <ol class="carousel-indicators">
                                            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#Carousel" data-slide-to="1"></li>
                                            <li data-target="#Carousel" data-slide-to="2"></li>
                                        </ol>
                                         
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            
                                        <div class="item active">
                                            <div class="row">
                                              <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/logo/logo1.png" alt="Image" style="max-width:100%;"></a></div>
                                              <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/logo/logo6.png" alt="Image" style="max-width:100%;"></a></div>
                                              <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/logo/logo3.png" alt="Image" style="max-width:100%;"></a></div>
                                              <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/logo/logo4.png" alt="Image" style="max-width:100%; "></a></div>
                                            </div><!--.row-->
                                        </div><!--.item-->
                                         
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/logo/logo5.png" alt="Image" style="max-width:100%;"></a></div>
                                                <div class="col-md-3"><a href="#" class="thumbnail"><img src="images/logo/logo6.png" alt="Image" style="max-width:100%;"></a></div>
                                                <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                                                <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                                            </div><!--.row-->
                                        </div><!--.item-->
                                         
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                                                <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                                                <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                                                <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                                            </div><!--.row-->
                                        </div><!--.item-->
                                         
                                        </div><!--.carousel-inner-->
                                          <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                                          <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                                        </div><!--.Carousel-->
                                         
                                </div>
                            </div>
                        </div> <!-- container -->

                </div> <!-- content -->



            </div>

            @endsection
