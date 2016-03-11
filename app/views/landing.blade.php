@extends('layouts.master')


@section('loader')

    <div class="preloader">
        <div class="preloader-img">
            <span class="loading-animation animate-flicker"><img src="assets/img/loading.GIF" alt="loading" /></span>
        </div>
    </div>

@stop


@section('navigation')

        <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.2s">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand smoothie page-scroll" href="#section1">SMALL <span class="theme-accent-color">DISHES</span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#section2" class="page-scroll">How It Works</a></li>
                    <li><a href="#section3" class="page-scroll">FAQs</a></li>
                    <li><a href="#section4" class="page-scroll">Featured</a></li>
                    <li><a href="/contact" class="">Contact</a></li>
                    <li><a href="/login" class="">Login</a></li>
                    <li><a href="/signup"><input type="button" id="headerSignupButton" class="btn btn-sm btn-primary" name="header_signup_button" value="Signup" ></a></li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container-fluid -->
    </nav>

@stop

@section('content')

    <div id="search-wrapper">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="Enter Search Term" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!-- Header -->
    <header id="section1" class="backstretched fullheight">
        <div class="container-fluid fullheight">
            <div class="vertical-center row">
                <div class="col-sm-1 match-height">
                </div>
                <div class="intro-text text-center smoothie col-sm-10 match-height">
                    <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.8s"><img src="assets/img/intro-logo.png"></div>
                </div>
                <div class="col-sm-1 match-height">
                </div>
            </div><br>
        </div>
    </header>

    <section id="section2" class="top-border-me">
        <div class="section-inner">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb100">
                        <h2 class="section-heading">How It <span class="theme-accent-color">Works</span></h2>
                        <hr class="thin-hr">
                    </div>
                </div>
            </div>

            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                            <h2 class="mb50">Discovery </h2>
                            <p class="lead">Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill. Love exciting and new. Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you.</p>
                            <p>Here he comes Here comes Speed Racer. He's a demon on wheels. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer.</p>
                        </div>

                        <div class="col-md-5">
                            <h2 class="mb50">Value </h2>
                            <p class="lead">Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill. Love exciting and new. Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you.</p>
                            <p>Here he comes Here comes Speed Racer. He's a demon on wheels. Believe it or not I'm walking on air. I never thought I could feel so free. Flying away on a wing and a prayer.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="section3" class="dark-wrapper top-border-me opaqued parallax" data-parallax="scroll" data-image-src="assets/img/bg/bg4.jpg" data-speed="0.8">
        <div class="section-inner">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb100">
                        <h2 class="section-heading">Frequently <span class="theme-accent-color">Asked</span> Questions</h2>
                        <hr class="thin-hr">
                    </div>
                </div>
            </div>

            <div class="wow fadeIn" data-wow-delay="0.2s">
                <div class="container">
                    <div class="col-md-12 wow fadeIn">
                        <h2 class="mb50"><span class="heading-font text-uppercase">Starters</span></h2>
                        <div class="food-menu-item">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="assets/img/food/meal4.jpg" class="img-responsive">
                                </div>
                                <div class="col-xs-9">
                                    <h3>Lorem Ipsum <span class="theme-accent-color">$8.95</span></h3>
                                    <p>No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Like Robinson Crusoe it's primitive as can be</p>
                                </div>
                            </div>
                        </div>
                        <div class="food-menu-item">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="assets/img/food/meal1.jpg" class="img-responsive">
                                </div>
                                <div class="col-xs-9">
                                    <h3>Lorem Ipsum <span class="theme-accent-color">$8.95</span></h3>
                                    <p>No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Like Robinson Crusoe it's primitive as can be</p>
                                </div>
                            </div>
                        </div>
                        <div class="food-menu-item">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="assets/img/food/meal2.jpg" class="img-responsive">
                                </div>
                                <div class="col-xs-9">
                                    <h3>Lorem Ipsum <span class="theme-accent-color">$8.95</span></h3>
                                    <p>No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Like Robinson Crusoe it's primitive as can be</p>
                                </div>
                            </div>
                        </div>
                        <div class="food-menu-item">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="assets/img/food/meal3.jpg" class="img-responsive">
                                </div>
                                <div class="col-xs-9">
                                    <h3>Lorem Ipsum <span class="theme-accent-color">$8.95</span></h3>
                                    <p>No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Like Robinson Crusoe it's primitive as can be</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section4" class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/bg/bg10.jpg" data-speed="0.8">
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb100">
                        <h2 class="section-heading">Featured <span class="theme-accent-color">Restaurants</span></h2>
                        <hr class="thin-hr">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="1" data-items-desktop="[1200,1]" data-items-desktop-small="[980,1]" data-items-tablet="[768,1]" data-items-mobile="[479,1]">
                            <li>
                                <div class="row">
                                    <div class="col-xs-8 col-xs-offset-2 item-caption">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <img src="assets/img/team/small1.jpg" class="img-responsive testimonial-author" alt="">
                                            </div>
                                            <div class="col-sm-10">
                                                <h4>Charles Davies</h4>
                                                <p>Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.</p>
                                                <ul class="list-inline">
                                                    <li><i class="fa fa-star theme-accent-color"></i></li>
                                                    <li><i class="fa fa-star theme-accent-color"></i></li>
                                                    <li><i class="fa fa-star theme-accent-color"></i></li>
                                                    <li><i class="fa fa-star theme-accent-color"></i></li>
                                                    <li><i class="fa fa-star theme-accent-color"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-8 col-xs-offset-2 item-caption">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <img src="assets/img/team/small1.jpg" class="img-responsive testimonial-author" alt="">
                                            </div>
                                            <div class="col-sm-10">
                                                <h4>Charles Davies</h4>
                                                <p>Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.</p>
                                                <ul class="list-inline">
                                                    <li><i class="fa fa-star theme-accent-color"></i></li>
                                                    <li><i class="fa fa-star theme-accent-color"></i></li>
                                                    <li><i class="fa fa-star theme-accent-color"></i></li>
                                                    <li><i class="fa fa-star theme-accent-color"></i></li>
                                                    <li><i class="fa fa-star theme-accent-color"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div id="mapwrapper"></div>
    </section>

    <footer class="white-wrapper">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-md-12 wow fadeIn mb30" data-wow-delay="0.2s">
                    <span class="copyright">Copyright 2016. Designed by DISTINCTIVE THEMES</span>
                </div>
                <div class="col-md-12">
                    <ul class="list-inline social-links wow fadeIn" data-wow-delay="0.2s">
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div id="bottom-frame">
        <input id="signupButton" class="btn btn-primary btn-block" type="button" name="signup_button" value="Signup now for only $14.95 per month!">
    </div>

    <a href="#" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

    </div>


    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/init.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
        $(document).ready(function(){
            'use strict';
            jQuery('#section1').backstretch([
                "assets/img/bg/bg1.jpg",
            ], {duration: 1000, fade: 500});
        });
    </script>
@stop