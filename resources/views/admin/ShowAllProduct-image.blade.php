@extends('admin.layouts.master')
@section('content')
<div class="row ">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="card m-t-80">
			<div class="card-title">
				<h4>All Image </h4>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-hover ">
						<thead>
							<tr>
								<th>#</th>
								<th>Image</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($images as $index => $image)
							<tr>
								<th scope="row">{{$index+1}}</th>
								<td class="color-primary"><img height="100" width="100" src="{{asset('images/uploaded/'.$image->name)}}" alt=""></td>
								<td class="color-primary">
									<a id="deleteBtn" data-id="{{$image->id}}" href="#" style="color: white;" class="btn btn-danger btn-outline m-b-10 m-l-5 btn-xs"><i class="fa fa-trash-o"></i></a>
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
			window.location.href = window.location.href = "image/delete/" + postId;
				}
			});
		});
	</script>
@endsection