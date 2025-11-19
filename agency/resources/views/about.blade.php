@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
<script src="{{ asset('js/about.js') }}"></script>

<!-- Banner Section -->
<section class="about-banner">
    <div class="container text-center">
        <span class="badge">About Us</span>
        <h1>Helping Students Achieve their Study Abroad Dreams with Expert Guidance</h1>
       
    </div>
</section>

<!-- About Content Section -->
<section class="features">
<div class="container features-inner">
    
    <!-- Left side text -->
    <div class="features-text">
      <h2>
      <span class="black-text">Who are we?</span>
      </h2>
      <p>Our Journey started with a single office in 2006 in Melbourne, Australia and since then we have expanded
         to different geographies Sydney, Adelaide and Perth in Australia, Dhaka and Chattogram offices in
          Bangladesh and Ahmedabad & Kolkata offices in India and Colombo office in Sri Lanka. Our multifield 
          growth across the segments is a testimony to our commitment to professionalism, persistent hard work,
           as well as efficient and effective teamwork.</p>
    </div>
    <!-- right  side text -->
    <div class="features-image">
    <picture>
        <!-- Mobile first -->
        <source srcset="{{ asset('images/feature.png') }}" media="(max-width: 768px)">
        <!-- Desktop default -->
        <img src="{{ asset('images/feature.png') }}" alt="Graduate and landmarks">
    </picture>
    </div>
</div>
</section>    
<section class="features">
<div class="container features-inner">
    
    <!-- Left side text -->
    <div class="features-image">
    <picture>
        <!-- Mobile first -->
        <source srcset="{{ asset('images/feature.png') }}" media="(max-width: 768px)">
        <!-- Desktop default -->
        <img src="{{ asset('images/feature.png') }}" alt="Graduate and landmarks">
    </picture>
    </div>
    <!-- right  side text -->
    <div class="features-text">
      <h2>
      <span class="black-text">why choose us?</span>
      </h2>
      <p>Our Journey started with a single office in 2006 in Melbourne, Australia and since then we have expanded
         to different geographies Sydney, Adelaide and Perth in Australia, Dhaka and Chattogram offices in
          Bangladesh and Ahmedabad & Kolkata offices in India and Colombo office in Sri Lanka. Our multifield 
          growth across the segments is a testimony to our commitment to professionalism, persistent hard work,
           as well as efficient and effective teamwork.</p>
    </div>
   
</div>
</section>   
<section class="featuresmission">
<div class="container featuresmission-inner">
    
    <!-- Left side text -->
   <div  class="feature-card">
   <h2>
      <span class="red-text"> Mission</span>
      </h2>
      <p>Going above and beyond to ensure that each of our student's career aspirations has been achieved
         through our guidance, and we achieve this together.
    </p>
   </div>
    <!-- right  side text -->
    <div  class="feature-card">
   <h2>
      <span class="red-text"> Vission</span>
      </h2>
      <p>
      To remain an industry leader by giving the highest level of client experience through ethical guidance so that students
       can make informed decisions on their career goals and become global citizens.
      </p>
   </div>
   
</div>
</section>  

@endsection
