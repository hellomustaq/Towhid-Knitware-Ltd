@extends('admin.layouts.master')
@section('content')
<div class="row ">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="card m-t-80">
			<div class="card-title">
				<h4>Add a Category</h4>
			</div>
			<div class="card-body">
				<div class="basic-form">
					<form action="{{route('category.store')}}" method="post">
						@csrf
						<div class="form-group">
							<label class="m-t-20" for="">Mother Category name : </label>
							<div class="input-group input-group-flat">
								<span class="input-group-btn" style="height: 30px;"><span class="btn btn-primary btn-disabled" ><i class="ti-search"></i></span></span>
								<select name="mCId" class="form-control" required>
									<option value="" selected="" disabled="">--Select a Mother Category--</option>
									@foreach($mCategories as $category)
									<option value="{{$category->id}}">{{$category->name}}</option>
									@endforeach
								</select>
								
							</div>
							<label class="m-t-40" for="">Category name :</label>
							<div class="input-group input-group-flat">
								<span class="input-group-btn"><span class="btn btn-primary btn-disabled" type="submit"><i class="ti-search"></i></span></span>
								<input type="text" name="category" class="form-control" placeholder="add a category" required="">
								
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
<div class="row ">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="card m-t-80">
			<div class="card-title">
				<h4>All Categories </h4>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-hover ">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($categories as $index => $category)
							<tr>
								<th scope="row">{{$index+1}}</th>
								<td class="color-primary">{{$category->name}}</td>
								<td class="color-primary">
									<a style="color: white;" href="{{route('category.edit',$category->id)}}" class="btn btn-info btn-outline m-b-10 m-l-5 btn-xs"><i class="fa fa-edit"></i></a>
									<a id="deleteBtn" data-id="{{$category->id}}" href="#" style="color: white;" class="btn btn-danger btn-outline m-b-10 m-l-5 btn-xs"><i class="fa fa-trash-o"></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>
</div>
@endsection
@section('script')
<script>
    $(document).on('click', '#deleteBtn', function(el) {
        var postId = $(this).data("id");

        swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this imaginary file!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            swal("Deleting...", {
              icon: "success",
            });
            window.location.href = window.location.href = "category/delete/" + postId;
          } 
        });

    });
</script>
@endsection