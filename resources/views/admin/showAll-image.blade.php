@extends('admin.layouts.master')
@section('content')
<div class="row ">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="tz-gallery">
            <div class="row">
                @foreach($images as $image)
                <div class="animated  col-sm-6 col-md-4">
                    <a class="lightbox" href="{{asset('images/uploaded/'.$image->name)}}">
                        <img src="{{asset('images/uploaded/'.$image->name)}}" alt="Park">
                    </a>
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
// $(document).on('click', '#deleteBtn', function(el) {
//     var postId = $(this).data("id");
//     swal({
//       title: "Are you sure?",
//       text: "Once deleted, you will not be able to recover this imaginary file!",
//       icon: "warning",
//       buttons: true,
//       dangerMode: true,
//     })
//     .then((willDelete) => {
//       if (willDelete) {
//         swal("Deleting...", {
//           icon: "success",
//         });
//         window.location.href = window.location.href = "brand/delete/" + postId;
//       }
//     });
// });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
baguetteBox.run('.tz-gallery');
</script>
@endsection