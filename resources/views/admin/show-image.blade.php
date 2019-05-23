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
				<h4>Select specific category to show image!</h4>
			</div>
			<div class="card-body">
				<div class="basic-form">
					<form action="{{ route('image.show.specific') }}" method="get" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<div class="input-group input-group-flat m-t-20">
								<span class="input-group-btn"><span class="btn btn-primary btn-disabled" ><i class="ti-search"></i></span></span>
								<select name="catId" class="form-control" required="">
									<option value="" selected="" disabled="">--Select a Category--</option>
									@foreach($categories as $category)
									<option value="{{$category->id}}">{{$category->name}}</option>
									@endforeach
								</select>
								
							</div>
							
							<div class="input-group input-group-flat m-t-30">
								<input type="submit" class="btn btn-success form-control" name='submitImage' value="Select Category to show Image">
								
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-2"></div>
</div>

@endsection

@section('script')

@endsection