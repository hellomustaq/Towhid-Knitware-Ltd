@extends('admin.layouts.master')
@section('content')
<div class="row ">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="card m-t-80">
                            <div class="card-title">
                                <h4>All Brands </h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover ">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Total Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@foreach($brands as $index => $brand)
                                            <tr>
                                                <th scope="row">1</th>
                                                <td class="color-primary">{{$brand->name}}</td>
                                                <td><span class="badge badge-primary">{{count($brand->images)}}</span></td>
                                                <td class="color-primary">
                                                <a href="{{route('brand.edit.custom',$brand->id)}}" class="btn btn-warning btn-outline m-b-10 m-l-5 btn-xs"><i class="fa fa-edit"></i></a>

                                                <a id="deleteBtn" data-id="{{$brand->id}}" href="#" style="color: white;" class="btn btn-danger btn-outline m-b-10 m-l-5 btn-xs"><i class="fa fa-trash-o"></i></a>
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
            window.location.href = window.location.href = "brand/delete/" + postId;
          } 
        });

    });
</script>
@endsection