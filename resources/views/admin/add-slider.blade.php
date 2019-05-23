@extends('admin.layouts.master')
@section('content')
<div class="row ">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="card m-t-80">
			<div class="card-title">
				<h4>Add a Slider</h4>
			</div>
			<div class="card-body">
				<div class="basic-form">
					<form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							
							<div class="input-group input-group-flat m-t-20">
								<span class="input-group-btn"><span class="btn btn-primary btn-disabled"><i class="ti-search"></i></span></span>
								<input type="file" id="uploadFile" name="uploadFile[]" class="form-control" required="" multiple>
							</div>
							
							<div class="input-group input-group-flat m-t-30">
								<input type="submit" class="btn btn-success form-control" name='submitImage' value="Upload Image">
								
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

@section('script')


<script type="text/javascript">



  $("#uploadFile").change(function(){

     $('#image_preview').html("");

     var total_file=document.getElementById("uploadFile").files.length;

     for(var i=0;i<total_file;i++)

     {

      $('#image_preview').append("<img style='margin:5px; height:200px;width:231px;border:1px solid #cacaca' src='"+URL.createObjectURL(event.target.files[i])+"'>");

     }

  });



  // $('form').ajaxForm(function() 

  //  {

  //   alert("Uploaded SuccessFully");

  //  }); 



</script>
@endsection