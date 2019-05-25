@extends('admin.layouts.master')
@section('content')
<div class="row ">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="tz-gallery">
            <h2 class="text-center">Showing "Sliders"</h2>
            <div class="row">
                @foreach($sliders as $image)
                <div class="animated  col-sm-12 col-md-6">
                    <div style="margin: 10px;">
                        <a class="lightbox" href="{{asset('images/slider/'.$image->name)}}">
                        <img src="{{asset('images/slider/'.$image->name)}}" alt="Park">
                    </a>
                    <a id="deleteBtn" data-id="{{$image->id}}" style="margin-top: -30px;" href="" class="btn btn-block btn-danger">Delete</a>
                    </div>
                    
                </div>
                @endforeach
                
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).on('click', '#deleteBtn', function(el) {
        el.preventDefault();
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
            window.location.href = window.location.href = "slider/delete/" + postId;
          } 
        });

    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
baguetteBox.run('.tz-gallery');
</script>
@endsection