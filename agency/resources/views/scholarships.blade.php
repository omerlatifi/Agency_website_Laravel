@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/scholarships.css') }}">
<script src="{{ asset('js/scholarships.js') }}"></script>
<section class="scholarship-heading text-center">
    <div class="container">
        <span class="badge">Scholarships</span>
        <h1>Explore Scholarships with Agency Bangladesh</h1>
        <p>Explore various factors that you need to consider before you choose your preferred course.</p>
    </div>
</section>


<!-- Country Cards -->
<section class="scholarship-cards">
    <div class="container grid-cards">
        <!-- Single Card -->
        <a href="/scholarships/australia" class="card">
            <img src="{{ asset('images/feature.png') }}" alt="Scholarship in Australia">
            <h3>Scholarships in Australia</h3>
       </a>

        <div class="card">
            <img src="{{ asset('images/feature.png') }}" alt="Scholarship in UK">
            <h3>Scholarships in UK</h3>
        </div>

        <div class="card">
            <img src="{{ asset('images/feature.png') }}" alt="Scholarship in USA">
            <h3>Scholarships in USA</h3>
        </div>

        <div class="card">
            <img src="{{ asset('images/feature.png') }}" alt="Scholarship in Canada">
            <h3>Scholarships in Canada</h3>
        </div>

        <div class="card">
            <img src="{{ asset('images/feature.png') }}" alt="Scholarship in Ireland">
            <h3>Scholarships in Ireland</h3>
        </div>
    </div>
</section>
@endsection