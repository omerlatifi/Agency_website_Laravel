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
                <h1 style="color:white;">EDIT FORM DETAILS</h1>
                       <div class="div_deg">
          


         <form action="{{ url('update_inquiry',$inquiry->id) }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>First Name</label>
                <input type="text" name="first_name" value="{{ $inquiry->first_name }}" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Last Name</label>
                <input type="text" name="last_name" value="{{ $inquiry->last_name }}" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label>Email</label>
                <input type="email" name="email" value="{{ $inquiry->email }}" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Phone</label>
                <input type="text" name="phone" value="{{ $inquiry->phone }}" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Office</label>
                <input type="text" name="office" value="{{ $inquiry->office }}" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Destination</label>
                <input type="text" name="destination" value="{{ $inquiry->destination }}" class="form-control" required>
            </div>

            <div class="col-md-6 mb-3">
                <label>Exam Status</label>
                <input type="text" name="exam_status" value="{{ $inquiry->exam_status }}" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Funding</label>
                <input type="text" name="funding" value="{{ $inquiry->funding }}" class="form-control" required>
            </div>

            <div class="col-12 mb-3">
                <label>Message</label>
                <textarea name="message" class="form-control">{{ $inquiry->message }}</textarea>
            </div>

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