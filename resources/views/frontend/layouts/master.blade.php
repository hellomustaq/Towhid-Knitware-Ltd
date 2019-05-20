<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from webdesign-finder.com/html/qtyler/header2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2019 18:16:52 GMT -->
<head>
    <title>Qtyler</title>
    <meta charset="utf-8">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animations.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" class="color-switcher-link">
    <link rel="stylesheet" href="{{asset('assets/css/shop.css')}}" class="color-switcher-link">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    {{-- <script src="{{asset('assets/js/vendor/modernizr-2.6.2.min.js')}}"></script> --}}
    <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <![endif]-->
</head>

<body>
    <!--[if lt IE 9]>
        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
    <![endif]-->
    <div class="preloader">
        <div class="preloader_image"></div>
    </div>
    <!-- search modal -->
    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">
            <i class="rt-icon2-cross2"></i>
        </span>
    </button>
        <div class="widget widget_search">
            <form method="get" class="searchform search-form form-inline" action="http://webdesign-finder.com/html/qtyler/">
                <div class="form-group bottommargin_0"> <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input"> </div> <button type="submit" class="theme_button color1 no_bg_button">Search</button> </form>
        </div>
    </div>
    <!-- Unyson messages modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
        <div class="fw-messages-wrap ls with_padding">
            <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
            <!--
        <ul class="list-unstyled">
            <li>Message To User</li>
        </ul>
        -->
        </div>
    </div>
    <!-- eof .modal -->
    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper">
            <!-- template sections -->
            
            
            @include('frontend.layouts.header')

            {{-- <section class="page_breadcrumbs ls background_cover section_padding_50">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h1 class="sr-only">Header 2</h1>
                            <ol class="breadcrumb darklinks">
                                <li> <a href="index.html">
                            Home
                        </a> </li>
                                <li> <a href="#">Features</a> </li>
                                <li class="active"> <span>Header 2</span> </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section> --}}
            
            @yield('content')

            <footer class="page_footer ls section_padding_top_150 section_padding_bottom_140 columns_margin_bottom_30">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-4 text-center text-md-left">
                            <div class="widget widget_text">
                                <div class="logo"> <img src="{{asset('assets/images/logo.png')}}" alt=""> </div>
                                <ul class="list-unstyled greylinks">
                                    <li>
                                        <div class="media small-media">
                                            <div class="media-left"> <i class="qtyler-phone"></i> </div>
                                            <div class="media-body"> 0-80vv-123-4567 </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media small-media">
                                            <div class="media-left"> <i class="qtyler-envelope"></i> </div>
                                            <div class="media-body"> <a href="mailto:#">qtyler@example.com</a> </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media small-media">
                                            <div class="media-left"> <i class="qtyler-map-marker"></i> </div>
                                            <div class="media-body"> 248 Hedge St, NJ 07201 </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 text-center text-md-left">
                            <div class="widget widget_text">
                                <h3 class="widget-title">Hours</h3>
                                <ul class="feature-list">
                                    <li> <span>Weekdays</span> <span>8:00 - 20:00</span> </li>
                                    <li> <span>Saturday</span> <span>9:00 - 16:00</span> </li>
                                    <li> <span>Sunday</span> <span>Closed</span> </li>
                                    <li> <span>Holidays</span> <span>10:00 - 14:00</span> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 text-center text-md-left">
                            <div class="widget widget_text">
                                <h3 class="widget-title">Details</h3>
                                <ul class="list-unstyled greylinks">
                                    <li>
                                        <div class="media small-media">
                                            <div class="media-left"> <i class="qtyler-delivery"></i> </div>
                                            <div class="media-body"> Worldwide 100% Free Shipping </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media small-media">
                                            <div class="media-left"> <i class="qtyler-headphones"></i> </div>
                                            <div class="media-body"> Fast and Excellent Customer Support </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media small-media">
                                            <div class="media-left"> <i class="qtyler-money"></i> </div>
                                            <div class="media-body"> 100% Moneyback Guarantee </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <section class="page_copyright ds background_cover section_padding_top_10 section_padding_bottom_10">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center"> &copy; Copyright 2018 All Rights Reserved </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/compressed.js')}}"></script>
    <script src="{{asset('assets/js/selectize.min.js')}}"></script>
    
    <script src="{{asset('assets/js/main.js')}}"></script>
    {{-- <script src="{{asset('assets/js/switcher.js')}}"></script> --}}
</body>


<!-- Mirrored from webdesign-finder.com/html/qtyler/header2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2019 18:16:52 GMT -->
</html>