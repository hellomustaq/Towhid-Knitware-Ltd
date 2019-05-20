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




            <section class="ls section_padding_top_150 section_padding_bottom_150">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3>Dolores Vel Reiciendis</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!</p>
                                </div>
                                <div class="col-sm-6">
                                    <h3>Reprehenderit Nemo Alias</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro numquam?</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <h3>Laboriosam ducimus</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque, aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim dicta voluptate quas ea, facilis repellat!</p>
                                </div>
                                <div class="col-sm-4">
                                    <h3>Necessitatibus Saepe</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro numquam?</p>
                                </div>
                                <div class="col-sm-4">
                                    <h3>Maxime Fugiat Error</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis voluptas doloribus cupiditate repudiandae porro.</p>
                                </div>
                            </div>
                            <h3>Consectetur Adipisicing Elit</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore in blanditiis tempora aliquam omnis recusandae maxime fugiat error dolores vel reiciendis quia, laboriosam dolorum, ipsa corrupti. Laboriosam odio ducimus harum. Lorem ipsum dolor
                                sit amet, consectetur adipisicing elit. Distinctio assumenda vitae iure, totam laboriosam voluptatibus delectus autem pariatur excepturi eligendi natus unde. Numquam vel quia dolore tempore consequuntur nobis architecto.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo repellendus, repellat rem debitis id, harum ipsa nostrum, aut eius atque repudiandae officia nemo. Laborum fugit maiores aut non sit alias. Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Dignissimos voluptas nihil tenetur quibusdam, laborum sed id laboriosam obcaecati corporis necessitatibus saepe voluptatem incidunt, cumque aperiam, quam nisi? Numquam, ullam, alias.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="gallery" class="ls fluid_padding_0 columns_padding_0">
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
            </section>
@endsection