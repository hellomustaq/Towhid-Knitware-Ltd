@extends('admin.layouts.master')
@section('content')
<div class="row ">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="card m-t-80">
			<div class="card-title">
				<h4>Add a Mother Category</h4>
			</div>
			<div class="card-body">
				<div class="basic-form">
					<form action="{{route('mother-category.store')}}" method="post">
						@csrf
						<div class="form-group">
							
							<div class="input-group input-group-flat">
								<span class="input-group-btn"><span class="btn btn-primary btn-disabled" type=""><i class="ti-search"></i></span></span>
								<input type="text" name="name" class="form-control" placeholder="add a mother category" required="">
								
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
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="card m-t-20">
			<div class="card-title">
				<h4> Mother Category List</h4>
			</div>
			<div class="card-body">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categories as $index => $category)
				<tr>
					<td>{{$index+1}}</td>
					<td>{{$category->name}}</td>
					<td>
						<a href="{{route('mother-category.edit',$category->id)}}" style="color: white;" class="btn btn-info btn-outline m-b-10 m-l-5 btn-xs"><i class="fa fa-pencil"></i></a>
						<a id="deleteBtn" data-id="{{$category->id}}" href="#" style="color: white;" class="btn btn-danger btn-outline m-b-10 m-l-5 btn-xs"><i class="fa fa-trash-o"></i></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div></div></div></div>
	<div class="col-md-2"></div>
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
            window.location.href = window.location.href = "mother-category/delete/" + postId;
          } 
        });

    });
</script>
@endsection