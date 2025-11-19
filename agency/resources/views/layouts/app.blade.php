<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Agency - Home</title>

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">

  <!-- Meta for CSRF (for forms / ajax) -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>
<body>
  <div class="site-wrapper">

    <!-- HEADER -->
    <header class="site-header">
      <div class="container header-inner">
        <a class="logo" href="{{ route('home') }}">
          <img src="{{ asset('images/logo.png') }}" alt="Agency Logo">
        </a>

    <nav class="main-nav" id="mainNav">
    <ul class="nav-list">
    <!-- About Us -->
    <li class="dropdown">
      <a href="{{ url('/about') }}">About Us</a>
      <ul class="dropdown-menu">
        <li><a href="{{ url('/about/awards') }}">Awards and Achievements</a></li>
        <li><a href="{{ url('/about/team') }}">Our Team</a></li>
      </ul>
    </li>

    <!-- Destinations 
    <li class="dropdown">
      <a href="#">Destination</a>
      <ul class="dropdown-menu">
        <li><a href="{{ url('/destination/uk') }}">UK</a></li>
        <li><a href="{{ url('/destination/usa') }}">USA</a></li>
        <li><a href="{{ url('/destination/australia') }}">Australia</a></li>
        <li><a href="{{ url('/destination/canada') }}">Canada</a></li>
      </ul>
    </li>
     -->
    <!-- Our Services -->
    <li class="dropdown">
      <a href="#">Our Services</a>
      <ul class="dropdown-menu">
        <li><a href="{{ url('/services/admission') }}">Admission Support</a></li>
        <li><a href="{{ url('/services/accommodation') }}">Student Accommodation</a></li>
        <li><a href="{{ url('/services/visa') }}">Visa Services</a></li>
        <li><a href="{{ url('/services/legal') }}">Legal Service</a></li>
      </ul>
    </li>

    <!-- Resources 
    <li class="dropdown">
      <a href="#">Resources</a>
      <ul class="dropdown-menu">
        <li><a href="{{ url('/resources/blogs') }}">Blogs</a></li>
        <li><a href="{{ url('/resources/guides') }}">Guides</a></li>
      </ul>
    </li>
    -->
    <!-- Scholarships -->
    <li class="dropdown">
      <a href="{{ url('/scholarships') }}">Scholarships</a>
      <ul class="dropdown-menu">
        <li><a href="{{ url('/scholarships/australia') }}">Australia</a></li>
        <li><a href="{{ url('/scholarships/uk') }}">UK</a></li>
        <li><a href="{{ url('/scholarships/usa') }}">USA</a></li>
        <li><a href="{{ url('/scholarships/canada') }}">Canada</a></li>
        <li><a href="{{ url('/scholarships/ireland') }}">Ireland </a></li>
        <li><a href="{{ url('/scholarships/ireland') }}">Ireland </a></li>
        <li><a href="{{ url('/scholarships/newzealand') }}">New Zealand </a></li>
        <li><a href="{{ url('/scholarships/japan') }}">Japan </a></li>
        <li><a href="{{ url('/scholarships/europecountries') }}">Europe Countries </a></li>
      </ul>
    </li>

    <li><a href="{{ url('/contact') }}">Contact us</a></li>
  </ul>
</nav>

        <div class="header-actions">
          <a class="btn btn-primary" href="#register">Register Now</a>
          <button class="hamburger" id="hamburger" aria-label="Open menu">
            <span></span><span></span><span></span>
          </button>
        </div>
      </div>

      <!-- Mobile nav panel -->
      <div class="mobile-nav" id="mobileNav">
  <ul>
      <li class="dropdown">
     <div class="dropdown-header">
       <a href="{{ url('/about') }}">About Us</a>
       <button class="dropdown-toggle" type="button" aria-label="Toggle About menu">▾</button>
     </div>
      <ul>
       <li><a href="{{ url('/about/awards') }}">Awards & Achievements</a></li>
       <li><a href="{{ url('/about/team') }}">Our Team</a></li>
      </ul>
      </li>

   <li class="dropdown">
     <div class="dropdown-header">
      <a href="#">Our Services</a>
       <button class="dropdown-toggle" type="button" aria-label="Toggle About menu">▾</button>
       </div>
      <ul>
        
        <li><a href="{{ url('/services/admission') }}">Admission Support</a></li>
        <li><a href="{{ url('/services/accommodation') }}">Student Accommodation</a></li>
        <li><a href="{{ url('/services/visa') }}">Visa Services</a></li>
        <li><a href="{{ url('/services/legal') }}">Legal Service</a></li>
      </ul>
    </li>

    <li class="dropdown">
     <div class="dropdown-header">
      <a href="{{ url('/scholarships') }}">Scholarships</a>
       <button class="dropdown-toggle" type="button" aria-label="Toggle About menu">▾</button>
       </div>
      <ul>
        <li><a href="{{ url('/scholarships/australia') }}">Australia</a></li>
        <li><a href="{{ url('/scholarships/uk') }}">UK</a></li>
        <li><a href="{{ url('/scholarships/usa') }}">USA</a></li>
        <li><a href="{{ url('/scholarships/canada') }}">Canada</a></li>
        <li><a href="{{ url('/scholarships/ireland') }}">Ireland </a></li>
        <li><a href="{{ url('/scholarships/ireland') }}">Ireland </a></li>
        <li><a href="{{ url('/scholarships/newzealand') }}">New Zealand </a></li>
        <li><a href="{{ url('/scholarships/japan') }}">Japan </a></li>
        <li><a href="{{ url('/scholarships/europecountries') }}">Europe Countries </a></li>
      </ul>
    </li>

    <li><a href="{{ url('/contact') }}">Contact us</a></li>
  </ul>
</div>
    </header>

    <!-- PAGE CONTENT -->
    <main>
      @yield('content')
    </main>
<!-- CONTACT + REGISTER FORM -->
<section class="contact-register" id="register">
  <div class="container contact-grid">
    <div class="contact-info">
      <h3>
        <span class="black-text1">Contact Us
          </span>

        </h3>
      <ul class="contact-bullets">
        <li> <span class="black-text2">Free* End-to-End Assistance</span></li>
        <li><span class="black-text2">Trusted by 22,000+ Students</span></li>
        <li><span class="black-text2">550+ Partner Institutions</span></li>
      </ul>
    
    </div>

    <div class="register-form">
      <h3>Register with Us to Take the Next Step</h3>
      <form method="POST" action="{{ route('inquiry.store') }}">
        @csrf
        <div class="form-row">
          <input type="text" name="first_name" placeholder="First Name" required>
          <input type="text" name="last_name" placeholder="Last Name"required>
        </div>

        <div class="form-row">
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
        @error('email')
            <span class="error-text" style="color:red; font-size:14px;">{{ $message }}</span>
        @enderror
        
        </div>
         <div class="form-row">
          <input type="text" name="phone" placeholder="Mobile Number" required>
         </div> 

        <div class="form-row">
          <select name="office" required>
            <option value="">Your nearest Agency Office</option>
            <option>Banani</option>
            <option>Uttara</option>
          </select>
        </div>
        <div class="form-row">
          <select name="destination" required>
            <option value="">Your Preferred Study Destination</option>
            <option>Australia</option>
            <option>UK</option>
            <option>USA</option>
            <option> Europe Countries</option>
            <option>Canada</option>
            <option>New Zealand</option>
            <option>Ireland</option>
          </select>
        </div>

        <div class="form-row">
          <select name="exam_status">
            <option value="">English Language Test Status</option>
            <option>IELTS</option>
            <option>PTE</option>
            <option>MOI</option>
            <option>None</option>
            <option>Others</option>
          </select>
        </div>
      <div class="form-row">
          <select name="funding">
            <option value="">How do you plan to fund your studies?</option>
            <option>Self</option>
            <option>Scholarship</option>
            <option>Loan</option>
            <option>Parents</option>
          </select>
        </div>

        <div class="form-row">
          <textarea name="message" placeholder="If you want tell aditional information"></textarea>
        </div>

        <div class="form-row">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>

    </div>
  </div>
 
@if ($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Validation Error',
            html: `{!! implode('<br>', $errors->all()) !!}`,
            confirmButtonColor: '#ff5a4a'
        });
    </script>
@endif

@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            confirmButtonColor: '#28a745'
        });
    </script>
@endif

</section>
    <!-- FOOTER -->
   <!-- Footer Section -->
   <footer class="site-footer">
  <div class="footer-top">
    <div class="footer-logo">
      <img src="logo.png" alt="Agency Global Logo">
      <p>
        Since 2006, Agency Global has been guiding students toward a better life abroad
        through expert higher education consultancy and end-to-end support.
      </p>
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div>

    <div class="footer-links">
      <div>
        <h4>Student Services</h4>
        <ul>
          <li><a href="#">Admission Support</a></li>
          <li><a href="#">Visa Services</a></li>
          <li><a href="#">Legal Service</a></li>
          <li><a href="#">Student Accommodation</a></li>
        </ul>
      </div>

      

      <div>
        <h4>Scholarships</h4>
        <ul>
          <li><a href="#">Australia</a></li>
          <li><a href="#">UK</a></li>
          <li><a href="#">Canada</a></li>
          <li><a href="#">Malaysia</a></li>
          <li><a href="#">USA</a></li>
          <li><a href="#">Japan</a></li>
          <li><a href="#">Europe</a></li>
          <li><a href="#">Dubai</a></li>
          <li><a href="#">New Zealand</a></li>
          <li><a href="#">Ireland</a></li>
          <li><a href="#">Indonesia</a></li>
        </ul>
      </div>

      

      <div>
        <h4>About Agency Global</h4>
        <ul>
          <li><a href="#">About Agency Bangladesh</a></li>
          <li><a href="#">Our Leadership</a></li>
          <li><a href="#">Awards & Achievements</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>

      
    </div>
  </div>

  <!-- Office Addresses -->
  <div class="footer-offices">
    <h4>Agency Global Offices in Bangladesh</h4>
    <div class="offices-grid">
      <div>
        <h5>Dhanmondi</h5>
        <p>SIMA Blossom (5th Floor) Plot 330 (Old), 43 (New), Road 27 (Old) 16, New, Dhaka 1209, Bangladesh</p>
        <p>📞 +880 9609 80 03 00</p>
      </div>
      <div>
        <h5>Banani</h5>
        <p>PSR Tower (7th Floor), House no. 50, Block C, Rd No 11, Banani, Dhaka 1213</p>
        <p>📞 +880 9609 80 09 00</p>
      </div>
      <div>
        <h5>Chattogram</h5>
        <p>9th floor, Equity Centrium, C R Nizam Road, GEC Circle, Chattogram</p>
        <p>📞 +880 9609 80 04 00</p>
      </div>
      <div>
        <h5>Uttara</h5>
        <p>Level 8, RM Plaza, 20 Sonargaon Janopath Road, Sector 11, Dhaka 1230</p>
        <p>📞 +880 9609 80 05 00</p>
      </div>
    </div>
  </div>

  <!-- Bottom -->
  <div class="footer-bottom">
    <p>
      Bangladesh | Australia | Sri Lanka | India |
    </p>
    <p>Copyright © 2025 Agency. | <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a></p>
  </div>
</footer>

  <!-- Cookie banner -->
  <div id="cookieBanner" class="cookie-banner">
    <div class="container">
      <div>We use cookies to give you the best experience. By using our site you agree to our cookie policy.</div>
      <div><button id="cookieAccept" class="btn">Accept</button></div>
    </div>
  </div>

  <!-- JS -->
  <script src="{{ asset('js/home.js') }}" defer></script>

</body>
</html>
