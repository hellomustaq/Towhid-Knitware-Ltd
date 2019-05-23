@extends('frontend.layouts.master')
@section('style')
<style>
	/*Contact sectiom*/
.content-header{
font-family: 'Oleo Script', cursive;
color:#fcc500;
font-size: 45px;
}
.section-content{
text-align: center;
}
#contact{
font-family: 'Teko', sans-serif;
padding-top: 60px;
width: 100%;
width: 100vw;
height: 550px;
background: #3a6186; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #3a6186 , #89253e); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
color : #fff;
}
.contact-section{
padding-top: 40px;
}
.contact-section .col-md-6{
width: 50%;
}
.form-line{
border-right: 1px solid #B29999;
}
.form-group{
margin-top: 10px;
}
label{
font-size: 1.3em;
line-height: 1em;
font-weight: normal;
}
.form-control{
font-size: 1.3em;
color: #080808;
}
textarea.form-control {
height: 135px;
/* margin-top: px;*/
}
.submit{
font-size: 1.1em;
float: right;
width: 150px;
background-color: transparent;
color: #fff;
}

</style>
@endsection
@section('content')
<div class="row">
	<div class="col-md-4">
		<div class="thumbnail mar ez-animate" data-animation="zoomIn" style="background: rgb(88, 216, 152)">
			<div class="caption">
				<span><i class="fa fa-map-marker fa-5x theme-white"></i></span>
				<h3 class="theme-white">Address</h3>
				<h6 class="theme-white">103, Shajahan Tower, Barabag ,</h6>
				<h6 class="theme-white">Mirpur-2, Dhaka-1216</h6>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="thumbnail mar ez-animate" data-animation="zoomIn" style="background: rgb(202, 42, 138)">
			<div class="caption">
				<span><i class="fa fa-phone fa-5x theme-white"></i></span>
				<h3 class="theme-white">Call Us</h3>
				<h6 class="theme-white">+88 016738843**</h6>
				<h6 class="theme-white">+88 016738843**</h6>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="thumbnail mar ez-animate" data-animation="zoomIn" style="background:rgb(109, 171, 255)">
			<div class="caption">
				<span><i class="fa fa-envelope fa-5x theme-white"></i></span>
				<h3 class="theme-white">Email</h3>
				<h6 class="theme-white">contact@towhidgroup.com</h6>
				<h6 class="theme-white">sales@towhidgroup.com</h6>
			</div>
		</div>
	</div>
</div>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6 form-line" style="background: #08afff7a;border-radius: 10px;">
				<div class="padd-30">
					<h2 class="text-center">Message Us</h2>
					<form>
						
						<div class="form-group">
							<label for="exampleInputUsername">Your name</label>
							<input type="text" class="form-control" id="" placeholder=" Enter Name">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail">Email Address</label>
							<input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
						</div>
						<div class="form-group">
							<label for="telephone">Mobile No.</label>
							<input type="tel" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no.">
						</div>
						
						<div class="form-group">
							<label for ="description"> Message</label>
							<textarea  class="form-control" id="description" placeholder="Enter Your Message"></textarea>
						</div>
						<div>
							<button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
						</div>
						<form>
						</div>
					</div>
					<div class="col-md-6">
						<div class="padd-30" style="background: #60c3ef9e;">
							<div class="map-responsive">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7300.838086512225!2d90.3592651293444!3d23.803693608100865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1a3749f073f%3A0xbf8ae91cdc9f82a0!2sShahajalal+Tower!5e0!3m2!1sen!2sbd!4v1558599338115!5m2!1sen!2sbd" width="550" height="750" frameborder="0" style="border:0" allowfullscreen>
									
								</iframe>
							</div>
						</div>
						<div class="thumbnail mar ez-animate" data-animation="zoomIn" style="background: white">
			              <div class="caption">
			                <span><i class="fa fa-globe fa-5x theme-color"></i></span>
			                
			                <h3>Some Quatation</h3>
			                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consecteturr adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. et condimentum neque commodo quis.Lorem ipsum dolor sit amet</p>
			                
			              </div>
			            </div>
						
						
					</div>
				</div>
			</div>
		</section>
		<section class="ls mt-30">
		</section>
		@endsection