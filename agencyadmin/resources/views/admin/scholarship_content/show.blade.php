<!DOCTYPE html>
<html>
  <head> 
  @include('admin.css')
  <style type ="text/css">
input[type='text']
{
  width :400px;
  height:50px;
}
.div_deg{
  display:flex;
  justify-content:center;
  align-items:center;
  margin:30px;
}
 </style>
  </head>
  <body>
  @include('admin.header')
  @include('admin.sidebar')
  <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
          <h1 style="color:white;">{{$content->country}}</h1>

         <div class="div_deg">
          


         <form action="{{ url('update_content',$content->id) }}" method="POST">
        @csrf
        
       @for($i = 1; $i <= 5; $i++)
            <div class="mb-3">
                <label>Heading {{ $i }}</label>
                <input type="text" name="heading{{ $i }}" class="form-control"
                       value="{{ old('heading'.$i, $content->{'heading'.$i}) }}">
            </div>

            <div class="mb-3">
                <label>Paragraph {{ $i }}</label>
                <textarea name="paragraph{{ $i }}" class="form-control"rows="8" style="min-height: 200px; font-size: 16px; line-height: 1.6; resize: vertical;">{{ old('paragraph'.$i, $content->{'paragraph'.$i}) }}</textarea>
            </div>
        @endfor

        <button type="submit" class="btn btn-primary">Update Form Details</button>

        @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
           @endif  
           @if (session('error'))
    <div class="alert alert-warning">
        {{ session('error') }}
    </div>
@endif



           </div>
</form>






  </div>
      </div>
    </div>
    <!-- JavaScript files-->
       <!-- Include SweetAlert2 -->
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Your custom JavaScript for delete confirmation -->
<script>
    function confirmation(categoryId) {
        event.preventDefault();

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ url('destroy') }}/" + categoryId;
            }
        });
    }
</script>
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
    <script>
    setTimeout(function() {
        $(".alert").fadeOut(500);
    }, 5000); // Message disappears after 5 seconds
     </script>
    
    
  </body>

</html>                         