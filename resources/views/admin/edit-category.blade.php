@extends('admin.layouts.master')
@section('content')
<div class="row ">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="card m-t-80">
			<div class="card-title">
				<h4>Edit Category</h4>
			</div>
			<div class="card-body">
				<div class="basic-form">
					<form action="{{route('category.update',$category->id)}}" method="post">
						@csrf
						{{ method_field('PUT') }}
						<div class="form-group">
							<label class="m-t-20" for="">Mother Category</label>
							<div class="input-group input-group-flat ">

								<span class="input-group-btn" style="height: 30px;"><span class="btn btn-primary btn-disabled" ><i class="ti-search"></i></span></span>
								<select name="mCId" class="form-control">
									<option value="" disabled="">--Select a Mother Category--</option>
									@foreach($mCategories as $mCategory)
									<option {{$mCategory->id==$category->id?'selected':''}} value="{{$mCategory->id}}">{{$mCategory->name}}</option>
									@endforeach
								</select>
								
							</div>
							<label class="m-t-40" for="">Category</label>
							<div class="input-group input-group-flat ">
								<span class="input-group-btn"><span class="btn btn-primary btn-disabled" type="submit"><i class="ti-search"></i></span></span>
								<input type="text" name="category" class="form-control" placeholder="add a category" required="" value="{{$category->name}}">
								
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