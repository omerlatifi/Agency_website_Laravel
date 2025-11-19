@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
<script src="{{ asset('js/about.js') }}"></script>

<section class="team">
  <div class="container">
    <h2 class="team-title">Our Leadership Team</h2>

    <div class="team-inner">

      <div class="team-card">
        <img src="{{ asset('images/icon.png') }}" alt="Team Member 1">
        <h3>John Doe</h3>
        <p class="role">CEO & Founder</p>
        <p class="bio">With 15+ years of leadership in global education consultancy, guiding students worldwide.</p>
      </div>

      <div class="team-card">
        <img src="{{ asset('images/icon.png') }}" alt="Team Member 2">
        <h3>Jane Smith</h3>
        <p class="role">Managing Director</p>
        <p class="bio">Specialist in overseas education, ensuring the highest service standards for students.</p>
      </div>

      <div class="team-card">
        <img src="{{ asset('images/icon.png') }}" alt="Team Member 3">
        <h3>Michael Lee</h3>
        <p class="role">Operations Head</p>
        <p class="bio">Manages operations across multiple countries, ensuring smooth student migration services.</p>
      </div>

    </div>
  </div>
</section>
@endsection