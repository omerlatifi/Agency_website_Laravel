@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
<script src="{{ asset('js/about.js') }}"></script>


<!-- Banner Section -->
<section class="about-banner">
    <div class="container text-center">
        <span class="badge">Awards</span>
        <h1>Agency Global: Shining with Prestigious Awards!</h1>
        <p>Our efforts have been recognized with many prestigious accolades over the years</p>
    </div>
</section>
<section class="awards">
  <div class="container awards-inner">

    <div class="award-card">
      <img src="{{ asset('images/awards.png') }}" alt="Award 1">
      <h3>Best Education Consultancy 2020</h3>
      <p>Recognized for excellence in guiding international students with professionalism.</p>
    </div>

    <div class="award-card">
      <img src="{{ asset('images/awards.png') }}" alt="Award 2">
      <h3>Top Service Award 2021</h3>
      <p>Honored for continuous support and top-quality student services worldwide.</p>
    </div>

    <div class="award-card">
      <img src="{{ asset('images/awards.png') }}" alt="Award 3">
      <h3>Global Recognition 2022</h3>
      <p>Awarded for successful placements across Australia, UK, Canada, and USA.</p>
    </div>

  </div>
</section>

@endsection

