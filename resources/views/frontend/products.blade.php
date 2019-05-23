@extends('frontend.layouts.master')
@section('content')
<section class="ls mt-30">
    <h1 class="text-center">{{$category->name}}</h1>
    
    <div class="tz-gallery">
        <div class="row">
            @foreach($category->images as $image)
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="{{asset('images/products/'.$image->name)}}">
                    <img src="{{asset('images/products/'.$image->name)}}" alt="{{$category->name}}">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection