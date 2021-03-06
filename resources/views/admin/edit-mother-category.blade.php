@extends('admin.layouts.master')
@section('content')
<div class="row ">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="card m-t-80">
			<div class="card-title">
				<h4>Edit Mother Category</h4>
			</div>
			<div class="card-body">
				<div class="basic-form">
					<form action="{{route('mother-category.update',$category->id)}}" method="post">
						@csrf
						{{ method_field('PUT') }}
						<div class="form-group">
							
							<div class="input-group input-group-flat">
								<span class="input-group-btn"><span class="btn btn-primary btn-disabled" type="submit"><i class="ti-search"></i></span></span>
								<input type="text" name="name" class="form-control" placeholder="add a category" required="" value="{{$category->name}}">
								
							</div>
							<div class="input-group input-group-flat m-t-30">
								<input type="submit" class="btn btn-success form-control" placeholder="add a category">
								
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>
@endsection