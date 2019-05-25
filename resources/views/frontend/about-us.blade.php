@extends('frontend.layouts.master')
@section('content')
<section class="ls mt-30">
	<h2 class="text-center padd-20"><span class="section-header">About Us</span></h2>
	<p class="mar-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet</p>
	<div class="row">
		<div class="col-md-6">
			<div class="mar-20">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.</p>
				<div class="row ez-animate" data-animation="fadeInUp" data-animation-offset="90%" data-animation-delay="0.0s">
					<div class="col-md-2 text-center-cus"><i class="fa fa-check fa-circle theme-color"></i></div>
					<div class="col-md-10 text-center-cus">
						<h4>Great Team</h4>
						<p class="lh-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet</p>
					</div>
				</div>
				<div class="row ez-animate" data-animation="fadeInUp" data-animation-offset="80%" data-animation-delay="0.3s">
					<div class="col-md-2  text-center-cus"><i class="fa fa-check fa-circle theme-color"></i></div>
					<div class="col-md-10  text-center-cus">
						<h4>Experinces</h4>
						<p class="lh-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet</p>
					</div>
				</div>
				<div class="row ez-animate" data-animation="fadeInUp" data-animation-offset="70%" data-animation-delay="0.6s">
					<div class="col-md-2 text-center-cus"><i class="fa fa-check fa-circle theme-color"></i></div>
					<div class="col-md-10 text-center-cus">
						<h4>Professional</h4>
						<p class="lh-25">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet</p>
					</div>
				</div>
				
			</div>
			
		</div>
		<div class="col-md-6">
			<div class="mar-20">
				<img class="ez-animate" data-animation="fadeInRight" data-animation-offset="80%" style="max-height: 600px;width: 500px;border-radius: 10px;" src="{{asset('assets/images/gallery/15.jpg')}}" alt="">
			</div>
			
		</div>
	</div>
</section>
<section class="ls mt-30">
	<h2 class="text-center padd-20"><span class="section-header">Why You Choose Us</span></h2>
	<p class="lh-25 padd">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit ametLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit ametLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet</p>
	<div class="row">
                <div class="col-md-12">
                    <div class="main-timeline">
                        <a href="#" class="timeline">
                            <div class="timeline-icon"><i class="fa fa-globe"></i></div>
                            <div class="timeline-content">
                                <h3 class="title">Dedicated Factory</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ducimus officiis quod! Aperiam eveniet nam nostrum odit quasi ullam voluptatum.
                                </p>
                            </div>
                        </a>
                        <a href="#" class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <div class="timeline-content">
                                <h3 class="title">Timely Shipment</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ducimus officiis quod! Aperiam eveniet nam nostrum odit quasi ullam voluptatum.
                                </p>
                            </div>
                        </a>
                        <a href="#" class="timeline">
                            <div class="timeline-icon"><i class="fa fa-briefcase"></i></div>
                            <div class="timeline-content">
                                <h3 class="title">Quality Products</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ducimus officiis quod! Aperiam eveniet nam nostrum odit quasi ullam voluptatum.
                                </p>
                            </div>
                        </a>
                        <a href="#" class="timeline">
                            <div class="timeline-icon"><i class="fa fa-mobile"></i></div>
                            <div class="timeline-content">
                                <h3 class="title">Technical Knowledge</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ducimus officiis quod! Aperiam eveniet nam nostrum odit quasi ullam voluptatum.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
</section>
@endsection