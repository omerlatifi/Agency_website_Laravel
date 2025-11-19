<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{asset('admincss/img/avatar-1.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">{{Auth::user()->name}}</h1>
            <p>Web Developer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="{{url('/dashboard')}}"> <i class="icon-home"></i>Home </a></li>
                <li><a href="{{url('view_inquiry')}}"> <i class="icon-grid"></i>Inquiry </a></li>
                
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Scholarship</a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('admin/scholarship/australia')}}">Australia</a></li>
                    <li><a href="{{url('admin/scholarship/uk')}}">Uk</a></li>
                    <li><a href="{{url('admin/scholarship/usa')}}">USA</a></li>
                     <li><a href="{{url('admin/scholarship/canada')}}">Canada</a></li>
                      <li><a href="{{url('admin/scholarship/ireland')}}">Ireland</a></li>
                       <li><a href="{{url('admin/scholarship/newzeland')}}">New Zeland</a></li>
                        <li><a href="{{url('admin/scholarship/japan')}}">Japan</a></li>
                    <li><a href="{{url('admin/scholarship/Europe')}}">Europe Country</a></li>
                    
                  </ul>
                </li>
                
                <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>

        </ul>
      </nav>