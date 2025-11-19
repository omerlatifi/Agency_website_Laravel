@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
<script src="{{ asset('js/contact.js') }}"></script>
<section class="admission-banner">
  <div class="container admission-inner">
    
    <!-- Left Side Content -->
    <div class="admission-text">
      <span class="badge">contact us</span>
      <h1>Reach out to us and get started on your Study Abroad Dreams</h1>
      <p>Our team of experts are waiting to assist you further. You can get in touch by:</p>
  
    </div>

    <!-- Right Side Image -->
<div class="register-form">
      <h3>
        <span class="black-text">Register with Us to Take the Next Step</span>
    </h3>
      <form method="POST" action="{{ route('inquiry.store') }}">
        @csrf
        <div class="form-row">
          <input type="text" name="first_name" placeholder="First Name" required>
          <input type="text" name="last_name" placeholder="Last Name">
        </div>

        <div class="form-row">
          <input type="email" name="email" placeholder="Email" required>
          <input type="text" name="phone" placeholder="Mobile Number" required>
        </div>

        <div class="form-row">
          <select name="office" required>
            <option value="">Your nearest Agency Office</option>
            <option>Banani</option>
            <option>Uttara</option>
          </select>

          <select name="destination" required>
            <option value="">Your Preferred Study Destination</option>
            <option>Australia</option>
            <option>UK</option>
            <option>USA</option>
          </select>
        </div>

        <div class="form-row">
          <select name="exam_status">
            <option value="">English Language Test Status</option>
            <option>IELTS</option>
            <option>PTE</option>
            <option>None</option>
          </select>

          <select name="funding">
            <option value="">How do you plan to fund your studies?</option>
            <option>Self</option>
            <option>Scholarship</option>
            <option>Loan</option>
          </select>
        </div>

        <div class="form-row">
          <textarea name="message" placeholder="How do you plan to fund your studies?"></textarea>
        </div>

        <div class="form-row">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>


  </div>
</section>


<!-- office-locations -->
<section class="office-locations">
  <div class="container">
    <h2>Our Services can be Availed in 4 Countries</h2>
    <p>Pick a country and get the details to connect with our team located near your city.</p>

    <!-- Country Tabs -->
    <div class="country-tabs">
      <button class="tab-button active" data-country="bangladesh">Bangladesh</button>
      <button class="tab-button" data-country="australia">Australia</button>
      <button class="tab-button" data-country="india">India</button>
      <button class="tab-button" data-country="srilanka">Sri Lanka</button>
    </div>

    <!-- Bangladesh Offices -->
    <div class="tab-content active" id="bangladesh">
      <div class="office-grid">
        <div class="office-card">
          <h4>Dhanmondi 27</h4>
          <p><i class="fa fa-map-marker-alt"></i> Sima Blossom (Beside Rapa Plaza), H#3 (Level 2), Rd #27 Dhanmondi</p>
          <p class="map">Get Location on Google Map</p>
          <p><i class="fa fa-phone"></i> +880 1958 66 56 18</p>
          <button class="btn-meeting">Schedule a Virtual Meeting</button>
        </div>

        <div class="office-card">
          <h4>Banani 11</h4>
          <p><i class="fa fa-map-marker-alt"></i> Pizza Hut Building, House #50, Level #9</p>
          <p class="map">Get Location on Google Map</p>
          <p><i class="fa fa-phone"></i> +880 1958 66 56 20</p>
          <button class="btn-meeting">Schedule a Virtual Meeting</button>
        </div>

        <div class="office-card">
          <h4>Chattogram</h4>
          <p><i class="fa fa-map-marker-alt"></i> 4th floor, Equity Centrum, O R Nizam Road, GEC Circle</p>
          <p class="map">Get Location on Google Map</p>
          <p><i class="fa fa-phone"></i> +880 1958 66 56 05</p>
          <button class="btn-meeting">Schedule a Virtual Meeting</button>
        </div>

        <div class="office-card">
          <h4>Uttara</h4>
          <p><i class="fa fa-map-marker-alt"></i> Level 8, RM Plaza, 20 Sonargaon Janopath Road, Sector 11</p>
          <p class="map">Get Location on Google Map</p>
          <p><i class="fa fa-phone"></i> +880 9609 80 05 00</p>
          <button class="btn-meeting">Schedule a Virtual Meeting</button>
        </div>
      </div>
    </div>

    <!-- Other Countries -->
    <div class="tab-content" id="australia">
      <p class="coming-soon">Coming soon...</p>
    </div>
    <div class="tab-content" id="india">
      <p class="coming-soon">Coming soon...</p>
    </div>
    <div class="tab-content" id="srilanka">
      <p class="coming-soon">Coming soon...</p>
    </div>

  </div>
</section>






@endsection