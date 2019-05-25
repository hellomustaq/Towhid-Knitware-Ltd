@php
    // for getting all Mother Category
    $mCategoryies=App\MotherCategory::all();
@endphp


<section class="page_topline ls section_padding_top_15 section_padding_bottom_15 columns_margin_0">
    <div class="container-fluid">
        <div class="row flex-wrap v-center">
            <div class="col-xs-12 col-md-6 col-lg-4 text-center text-md-left">
                <div class="inline-content grey"> <span>
                    <i class="fa fa-phone highlight rightpadding_5" aria-hidden="true"></i>
                    Call Us +88 016738843**
                </span> </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4 col-lg-push-4 text-center text-md-right">
                <div class="inline-content grey darklinks"> <span>
                    <i class="fa fa-map-marker highlight rightpadding_5" aria-hidden="true"></i>
                    Borobag Mirpur-2, Dhaka-1216
                </span> </div>
            </div>
            <div class="col-xs-12 col-lg-4 col-lg-pull-4 text-center">
                <div class="page-social darklinks"> <a class="social-icon socicon-facebook" href="#" title="Facebook"></a> <a class="social-icon socicon-twitter" href="#" title="Twitter"></a> <a class="social-icon socicon-google" href="#" title="Twitter"></a> <a class="social-icon socicon-linkedin"
                href="#" title="Twitter"></a> <a class="social-icon socicon-youtube" href="#" title="Youtube"></a> </div>
            </div>
        </div>
    </div>
</section>
<header class="page_header header_white tall_header toggler_xs_right">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 display-flex v-center">
                <div class="header_left_logo display_table_cell"> <a href="{{url('/')}}" class="logo">
                    <img src="{{asset('images/towhidLogo.png')}}" alt="">
                </a> </div>
                <div class="header_mainmenu display_table_cell text-center">
                    <!-- main nav start -->
                    <nav class="mainmenu_wrapper">
                        <ul class="mainmenu nav sf-menu">
                            
                            <li class=""> <a class="theme-white" href="{{url('/')}}">Home</a>
                        </li>
                        <li class=""> <a class="theme-white" href="index-2.html">Service</a>
                        <ul>
                            <li> <a href="index-2.html">Home</a> </li>
                            <li> <a href="">Home static intro</a> </li>
                            <li> <a href="">Home single page</a> </li>
                        </ul>
                    </li>
                    <li> <a class="theme-white" href="#">Products <i class="ion-md-arrow-dropdown"></i></a>

                    <style>
                        @media (min-width: 1200px){
                            .listsMega {
                                color: #363636;
                                text-transform: unset !important;
                                letter-spacing: unset !important;
                                font-weight: bold !important;
                                font-size: 13px !important;
                            }
                        }

                    </style>

                    <div class="mega-menu">
                        <ul class="mega-menu-row">
                            <div class="row">
                                @foreach($mCategoryies as $mCategory)
                                <div class="col-md-2">
                                    <h6 class="paddingForMega">{{$mCategory->name}}</h6>
                                    <div class="paddingForMega">
                                        @foreach($mCategory->categories as $category)
                                        <a class="listsMega" href="{{route('products',$category->id)}}"><li>{{$category->name}}</li></a>
                                        @endforeach
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </ul>
                    </div>
                    <!-- eof mega menu -->
                </li>
                <!-- eof features -->
                <!-- contacts -->
                <li>
                    <a class="theme-white" href="{{url('/about-us')}}">About</a>
                </li>
                <li>
                    <a class="theme-white" href="{{url('/contact')}}">Contact</a>
                </li>
                <!-- eof contacts -->
            </ul>
        </nav>
        <!-- eof main nav -->
        <!-- header toggler --><span class="toggle_menu"><span></span></span>
    </div>
    <div  class="header_right_buttons display_table_cell text-right hidden-xs" > <a href="{{url('/contact')}}" style="border-color: white!important;" class="theme-white theme_button color1">Contact</a> </div>
</div>
</div>
</div>
</header>