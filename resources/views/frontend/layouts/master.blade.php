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
    <link rel="stylesheet" href="{{asset('css/style.css')}}" >
    <link rel="stylesheet" href="{{asset('assets/css/shop.css')}}" class="color-switcher-link">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

     <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
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

            @include('frontend.layouts.footer')
            <section class="page_copyright ds background_cover section_padding_top_10 section_padding_bottom_10">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center"> &copy; Copyright 2019 Towhid Group. All Rights Reserved </div>
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


    {{-- image gellary --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>
    {{-- end image gellary --}}


    {{-- <script src="{{asset('assets/js/switcher.js')}}"></script> --}}
</body>


<!-- Mirrored from webdesign-finder.com/html/qtyler/header2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2019 18:16:52 GMT -->
</html>