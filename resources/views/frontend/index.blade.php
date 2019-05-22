@extends('frontend.layouts.master')
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="max-height: 550px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item">
            <img class="first-slide" src="{{asset('assets/images/gallery/single/01.jpg')}}" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" src="{{asset('assets/images/gallery/single/07.jpg')}}" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    
                </div>
            </div>
        </div>
        <div class="item active">
            <img class="third-slide" src="{{asset('assets/images/gallery/single/08.jpg')}}" alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <i class="fa fa-arrow-left"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <i class="fa fa-arrow-right"></i>
        <span class="sr-only">Next</span>
    </a>
</div>
<section class="ls mt-50">
    <div class=" gallery-container">
        <h1>Our Portfolio</h1>
        <p class="page-description text-center">You ware, We made!</p>
        
        <div class="tz-gallery">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{asset('assets/images/shop/01-1.jpg')}}">
                        <img src="{{asset('assets/images/shop/01-1.jpg')}}" alt="Park">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{asset('assets/images/shop/02-1.jpg')}}">
                        <img src="{{asset('assets/images/shop/02-1.jpg')}}" alt="Bridge">
                    </a>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a class="lightbox" href="{{asset('assets/images/shop/03-1.jpg')}}">
                        <img src="{{asset('assets/images/shop/03-1.jpg')}}" alt="Tunnel">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{asset('assets/images/shop/04-1.jpg')}}">
                        <img src="{{asset('assets/images/shop/04-1.jpg')}}" alt="Coast">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{asset('assets/images/shop/05-1.jpg')}}">
                        <img src="{{asset('assets/images/shop/05-1.jpg')}}" alt="Rails">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{asset('assets/images/shop/06-1.jpg')}}">
                        <img src="{{asset('assets/images/shop/06-1.jpg')}}" alt="Traffic">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{asset('assets/images/shop/07-1.jpg')}}">
                        <img src="{{asset('assets/images/shop/07-1.jpg')}}" alt="Rocks">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{asset('assets/images/shop/08-1.jpg')}}">
                        <img src="{{asset('assets/images/shop/08-1.jpg')}}" alt="Benches">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{asset('assets/images/shop/09-1.jpg')}}">
                        <img src="{{asset('assets/images/shop/09-1.jpg')}}" alt="Sky">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ls mt-50">
            <h2 class="text-center">Features</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline2">
                        <div class="timeline ">
                            <span class="icon fa fa-globe"></span>
                            <a href="#" class="timeline-content ez-animate" data-animation="lightSpeedIn">
                                <h3 class=" text-center title">Competitive price</h3><br>
                                <img style="border-radius: 10px;" src="{{asset('assets/images/services/01.jpg')}}" alt="">
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <span class="icon fa fa-rocket"></span>
                            <a href="#" class="timeline-content ez-animate" data-animation="lightSpeedIn">
                                <h3 class=" text-center title">Time & Action Plan</h3><br>
                                <img style="border-radius: 10px;" src="{{asset('assets/images/services/02.jpg')}}" alt="">
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <span class="icon fa fa-briefcase"></span>
                            <a href="#" class="timeline-content ez-animate" data-animation="lightSpeedIn">
                                <h3 class=" text-center title">Quality</h3><br>
                                <img style="border-radius: 10px;" src="{{asset('assets/images/services/03.jpg')}}" alt="">
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <span class="icon fa fa-mobile"></span>
                            <a href="#" class="timeline-content ez-animate" data-animation="lightSpeedIn">
                                <h3 class=" text-center title">Service</h3><br>
                                <img style="border-radius: 10px;" src="{{asset('assets/images/services/04.jpg')}}" alt="">
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
</section>


<section class="ls mt-50">
    <h2 class="text-center padd-30">Philosophy</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="thumbnail mar ez-animate" data-animation="zoomIn">
              <div class="caption">
                <span><i class="fa fa-globe fa-5x theme-color"></i></span>
                
                <h3>Our Vision</h3>
                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet</p>
                
              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="thumbnail mar ez-animate" data-animation="zoomIn">
              <div class="caption">
                <span><i class="fa fa-rocket fa-5x theme-color"></i></span>
                <h3>Our Mission</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet</p>
                
              </div>
            </div>
        </div>
    </div>
</section>

<section class="ls mt-50 padd">
    <h2 class="text-center padd-30">Our Proud Partners</h2>
    <div class="customer-logos">
  <div class="slide"><img src="{{asset('assets/images/partners/01.jpg')}}"></div>
  <div class="slide"><img src="{{asset('assets/images/partners/02.jpg')}}"></div>
  <div class="slide"><img src="{{asset('assets/images/partners/03.jpg')}}"></div>
  <div class="slide"><img src="{{asset('assets/images/partners/04.jpg')}}"></div>
  <div class="slide"><img src="{{asset('assets/images/partners/05.jpg')}}"></div>
  <div class="slide"><img src="{{asset('assets/images/partners/06.jpg')}}"></div>
  <div class="slide"><img src="{{asset('assets/images/partners/07.jpg')}}"></div>
  <div class="slide"><img src="{{asset('assets/images/partners/08.jpg')}}"></div>
</div>
</section>

{{-- <section id="gallery" class="ls fluid_padding_0 columns_padding_0 mt-50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="owl-carousel gallery-carousel framed" data-responsive-xlg="6" data-responsive-lg="5" data-responsive-md="4" data-responsive-sm="3" data-responsive-xs="3" data-responsive-xxs="2" data-loop="true" data-margin="0" data-nav="true">
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{asset('assets/images/gallery-square/01.jpg')}}" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{asset('assets/images/gallery/01.jpg')}}">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <a class="p-view prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{asset('assets/images/gallery/02.jpg')}}">
                            <img src="{{asset('assets/images/gallery-square/02.jpg')}}" alt="">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{asset('assets/images/gallery-square/03.jpg')}}" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{asset('assets/images/gallery/03.jpg')}}">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{asset('assets/images/gallery-square/04.jpg')}}" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{asset('assets/images/gallery/04.jpg')}}">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{asset('assets/images/gallery-square/05.jpg')}}" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{asset('assets/images/gallery/05.jpg')}}">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{asset('assets/images/gallery-square/06.jpg')}}" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{asset('assets/images/gallery/06.jpg')}}">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{asset('assets/images/gallery-square/07.jpg')}}" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{asset('assets/images/gallery/07.jpg')}}">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{asset('assets/images/gallery-square/08.jpg')}}" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{asset('assets/images/gallery/08.jpg')}}">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{asset('assets/images/gallery-square/09.jpg')}}" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{asset('assets/images/gallery/09.jpg')}}">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{asset('assets/images/gallery-square/10.jpg')}}" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{asset('assets/images/gallery/10.jpg')}}">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{asset('assets/images/gallery-square/11.jpg')}}" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{asset('assets/images/gallery/11.jpg')}}">
                        </a> </div>
                    </div>
                    <div class="vertical-item">
                        <div class="item-media"> <img src="{{asset('assets/images/gallery-square/12.jpg')}}" alt=""> <a class="abs-link prettyPhoto" data-gal="prettyPhoto[gal]" title="" href="{{asset('assets/images/gallery/12.jpg')}}">
                        </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

@endsection