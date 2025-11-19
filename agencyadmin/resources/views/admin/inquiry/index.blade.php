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
          <h1 style="color:white;">FORM DETAILS</h1>
           </div>
        </div>
        <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table  class="table table-hover no-wrap product-order" data-page-size="10">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Destination</th>
                                <th>Date</th>
                                <th>Actions</th>
  
                            </tr>
                            <?php

                         $menuListCount= count($menuList);

                            ?>
                       @foreach ($menuList as $menuLists)
                       <tr>
                       
                       <td>{{ $loop->index+1 }}</td>
                        <td>{{ $menuLists->first_name }} {{ $menuLists->last_name }}</td>
                        <td>{{ $menuLists->email }}</td>
                        <td>{{ $menuLists->phone }}</td>
                        <td>{{ $menuLists->destination }}</td>
                        <td>{{ $menuLists->created_at->format('d M Y') }}</td>
                      <td>

                                 <a href="{{url('show_inquiry',$menuLists->id) }}"class="text-info me-10 mx-3" data-bs-toggle="tooltip" data-bs-original-title="show">
                                    <i class="fa fa-eye"></i></a>
                                <a href="{{url('edit_inquiry',$menuLists->id) }}" class="text-info me-10 mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                    <i class="fa fa-pencil"></i>
                                    </a>
                                   
                                    <a href="#" class="text-danger" onclick="confirmation({{$menuLists->id}})"   data-bs-original-title="Delete" data-bs-toggle="tooltip">
                                        <i class="fa fa-trash"></i>
                                    </a>
                               
  

                                </td>
                            </tr>

                      @endforeach

                           

        
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
       <!-- Include SweetAlert2 -->
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Your custom JavaScript for delete confirmation -->
<script>
    function confirmation(inquiryId) {
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
                window.location.href = "{{ url('destroy') }}/" + inquiryId;
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