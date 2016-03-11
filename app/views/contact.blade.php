@extends('layouts.master')

@section('navigation')

        <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-shrink fadeInDown" data-wow-delay="0.2s">
        <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand smoothie page-scroll" href="/#section1">SMALL <span class="theme-accent-color">DISHES</span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/#section2" class="page-scroll">How It Works</a></li>
                    <li><a href="/#section3" class="page-scroll">FAQs</a></li>
                    <li><a href="/#section4" class="page-scroll">Featured</a></li>
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
    <section id="section1" class="">
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
    {{--<script src="assets/js/plugins.js"></script>--}}
    {{--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>--}}
    {{--<script src="assets/js/init.js"></script>--}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
        $(document).ready(function(){
            'use strict';
            jQuery('#headerwrap').backstretch([
                "assets/img/bg/bg1.jpg",
            ], {duration: 1000, fade: 500});
        });
    </script>
@stop