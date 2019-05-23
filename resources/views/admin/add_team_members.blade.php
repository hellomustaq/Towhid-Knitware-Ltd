@extends('admin.layouts.master')
@section('content')
<style>
	select.form-control:not([size]):not([multiple]) {
    /* height: calc(2.25rem + 2px); */
    height: 43px;
}
</style>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="card m-t-80">
			<div class="card-title">
				<h4>Add a Team Member</h4>
			</div>
			<div class="card-body">
				<div class="basic-form">
					<form action="{{ route('team-member.store') }}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<div class="input-group input-group-flat m-t-20">
								<span class="input-group-btn"><span class="btn btn-primary btn-disabled" ><i class="fa fa-user"></i></span></span>
								<input type="text" name="name" class="form-control" placeholder="Type Member Name">
								
							</div>
							<div class="input-group input-group-flat m-t-20">
								<span class="input-group-btn"><span class="btn btn-primary btn-disabled" ><i class="fa fa-list-alt"></i></span></span>
								<input type="text" name="description" class="form-control" placeholder="Type Member description">
								
							</div>
							<div class="input-group input-group-flat m-t-20">
								<span class="input-group-btn"><span class="btn btn-primary btn-disabled" ><i class="fa fa-facebook-square"></i></span></span>
								<input type="text" name="facebook" class="form-control" placeholder="Type Member facebook link">
								
							</div>
							<div class="input-group input-group-flat m-t-20">
								<span class="input-group-btn"><span class="btn btn-primary btn-disabled" ><i class="fa fa-instagram"></i></span></span>
								<input type="text" name="instagram" class="form-control" placeholder="Type Member instagram link">
								
							</div>
							<div class="input-group input-group-flat m-t-20">
								<span class="input-group-btn"><span class="btn btn-primary btn-disabled" ><i class="fa fa-linkedin-square"></i></span></span>
								<input type="text" name="linkdin" class="form-control" placeholder="Type Member linkdin link">
								
							</div>
							<div class="input-group input-group-flat m-t-20">
								<span class="input-group-btn"><span class="btn btn-primary btn-disabled" ><i class="fa fa-twitter"></i></span></span>
								<input type="text" name="twitter" class="form-control" placeholder="Type Member twitter link">
								
							</div>
							
							<div class="input-group input-group-flat m-t-20">
								<span class="input-group-btn"><span class="btn btn-primary btn-disabled"><i class="fa fa-picture-o"></i></span></span>
								<input type="file" name="image_name" class="form-control" required="">
							</div>
							
							<div class="input-group input-group-flat m-t-30">
								<input type="submit" class="btn btn-success form-control" name='submitImage' value="ADD MEMBER">
								
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-2"></div>
</div>


<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div id="image_preview"></div>
	</div>
	<div class="col-md-2"></div>
</div>


@endsection

