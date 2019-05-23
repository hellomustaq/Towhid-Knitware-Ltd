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
					<form action="{{ route('team-member.update',$teamMember->id) }}" method="post" enctype="multipart/form-data">
						@csrf
						{{ method_field('PUT') }}
						<div class="form-group">
							<div class="input-group input-group-flat m-t-20">
								<span class="input-group-btn"><span class="btn btn-primary btn-disabled" ><i class="fa fa-user"></i></span></span>
								<input type="text" name="name" class="form-control" value="{{$teamMember->name}}">
								
							</div>
							<div class="input-group input-group-flat m-t-20">
								<span class="input-group-btn"><span class="btn btn-primary btn-disabled" ><i class="fa fa-list-alt"></i></span></span>
								<input type="text" name="description" class="form-control" value="{{$teamMember->description}}">
								
							</div>
							<div class="input-group input-group-flat m-t-20">
								<span class="input-group-btn"><span class="btn btn-primary btn-disabled" ><i class="fa fa-facebook-square"></i></span></span>
								<input type="text" name="facebook" class="form-control" value="{{$teamMember->facebook}}">
								
							</div>
							<div class="input-group input-group-flat m-t-20">
								<span class="input-group-btn"><span class="btn btn-primary btn-disabled" ><i class="fa fa-instagram"></i></span></span>
								<input type="text" name="instagram" class="form-control" value="{{$teamMember->instragram}}">
								
							</div>
							<div class="input-group input-group-flat m-t-20">
								<span class="input-group-btn"><span class="btn btn-primary btn-disabled" ><i class="fa fa-linkedin-square"></i></span></span>
								<input type="text" name="linkdin" class="form-control" value="{{$teamMember->linkdin}}">
								
							</div>
							<div class="input-group input-group-flat m-t-20">
								<span class="input-group-btn"><span class="btn btn-primary btn-disabled" ><i class="fa fa-twitter"></i></span></span>
								<input type="text" name="twitter" class="form-control" value="{{$teamMember->twitter}}">
								
							</div>
							
							<div class="input-group input-group-flat m-t-20">
								<span class="input-group-btn"><span class="btn btn-primary btn-disabled"><i class="fa fa-picture-o"></i></span></span>
								<input type="file" name="image_name" class="form-control">
							</div>
							
							<div class="input-group input-group-flat m-t-30">
								<input type="submit" class="btn btn-success form-control" name='submitImage' value="UPDATE MEMBER">
								
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

