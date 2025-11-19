@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="hero">
  <div class="container hero-inner">
    <div class="hero-copy">
      <h1>Your Study Abroad Dream<br>is our only Priority!</h1>
      <p class="lead">From education to visas, we’ve got your back.</p>
      <div class="hero-cta">
        <a class="btn btn-primary" href="#register">Book a FREE Consultation</a>
      </div>
    </div>

    <!-- Hero image below text -->
    <div class="hero-image">
    <picture>
        <!-- Mobile first -->
        <source srcset="{{ asset('images/hero-mobile.png') }}" media="(max-width: 768px)">
        <!-- Desktop default -->
        <img src="{{ asset('images/hero-collage.png') }}" alt="Graduate and landmarks">
    </picture>
    </div>
  </div>
</section>


<!-- FEATURES (what we do) -->
<section class="features">
<div class="container features-inner">
    
    <!-- Left side text -->
    <div class="features-text">
      <h2>
      <span class="black-text">How Agency Global</span>
      <span class="blue-text"> Simplifies your Study Abroad Journey?</span>
      </h2>
      <p>Our services provide end-to-end assistance to study abroad aspirants. 
         We make the journey hassle-free!</p>
    </div>

    <!-- Right side cards -->
   <div class="features-grid">
    <a href="/admission-support" class="feature-card">
        <div class="feature-icon icon-admission">🎓</div>
        <h4>Admission Support</h4>
        <div class="feature-arrow">›</div>
    </a>

    <a href="/legal-service" class="feature-card">
        <div class="feature-icon icon-legal">⚖️</div>
        <h4>Legal Service</h4>
        <div class="feature-arrow">›</div>
    </a>

    <a href="/scholarship-guidance" class="feature-card">
        <div class="feature-icon icon-scholarship">💰</div>
        <h4>Scholarship Guidance</h4>
        <div class="feature-arrow">›</div>
    </a>

    <a href="/student-accommodation" class="feature-card">
        <div class="feature-icon icon-accommodation">🏠</div>
        <h4>Student Accommodation</h4>
        <div class="feature-arrow">›</div>
    </a>

    <a href="/visa-services" class="feature-card">
        <div class="feature-icon icon-visa">✈️</div>
        <h4>Visa Services</h4>
        <div class="feature-arrow">›</div>
    </a>
</div>


 
</section>

<!-- DESTINATIONS CAROUSEL -->
<section class="destinations">
  <div class="container">

  <h2 class="section-title">
  <span class="black-text">Gain Access</span> 
  <span class="blue-text">to Top Institutions across the Globe</span>
  </h2>
  <p class="section-sub">
  Pick a destination below and learn everything you need to make an informed decision.
  </p>

    <div class="carousel-wrapper">
      <button class="carousel-btn prev" data-target="destinations">‹</button>

      <div class="carousel" id="destinations">
        <!-- card -->
        <article class="dest-card">
          <img src="{{ asset('images/feature.png') }}"alt="Study in Ireland">
          <h4>Study in Ireland</h4>
          <p>Top universities and professional courses</p>
        </article>

        <article class="dest-card">
          <img src="{{ asset('images/feature.png') }}" alt="Study in New Zealand">
          <h4>Study in New Zealand</h4>
          <p>High quality education & safe campuses</p>
        </article>

        <article class="dest-card">
          <img src="{{ asset('images/feature.png') }}" alt="Study in Malaysia">
          <h4>Study in Malaysia</h4>
          <p>Affordable programs & multicultural life</p>
        </article>

        <article class="dest-card">
          <img src="{{ asset('images/feature.png') }}"alt="Study in Japan">
          <h4>Study in Japan</h4>
          <p>Technology & innovation focused programs</p>
        </article>

        <article class="dest-card">
          <img src="{{ asset('images/feature.png') }}" alt="Study in Europe">
          <h4>Study in Europe</h4>
          <p>Wide variety of scholarships & exchange programs</p>
        </article>
      </div>

      <button class="carousel-btn next" data-target="destinations">›</button>
    </div>

    <div class="center-cta">
      <a class="btn btn-primary" href="#register">Book a FREE Consultation</a>
    </div>
  </div>
</section>

<!-- Study Steps Section -->
<section class="study-steps">
  <div class="container">
  <picture>
        <!-- Mobile first -->
        <source srcset="{{ asset('images/study-stepmobile.png') }}" media="(max-width: 768px)">
    <img src="{{ asset('images/study-step.png') }}" alt="Study Abroad in 5 Steps" class="steps-img">
  </picture>
  </div>
</section>


<!-- WHY CHOOSE US (stats + world map) -->


<!-- AWARDS -->
<section class="awards">
  <div class="container">
    <h2 class="section-title">Awards & achievements</h2>

    <div class="carousel-wrapper small" >
      <button class="carousel-btn prev" data-target="awards">‹</button>
      <div class="carousel" id="awards">
        <article class="award-card">
          <img src="{{ asset('images/award-1.jpg') }}" alt="award 1">
          <p>Recognition of ...</p>
        </article>
        <article class="award-card">
          <img src="{{ asset('images/award-2.jpg') }}" alt="award 2">
          <p>Certificate of ...</p>
        </article>
        <article class="award-card">
          <img src="{{ asset('images/award-3.jpg') }}" alt="award 3">
          <p>Partner award ...</p>
        </article>
        <article class="award-card">
          <img src="{{ asset('images/award-3.jpg') }}" alt="award 3">
          <p>Partner award ...</p>
        </article>
        <article class="award-card">
          <img src="{{ asset('images/award-3.jpg') }}" alt="award 3">
          <p>Partner award ...</p>
        </article>
        <article class="award-card">
          <img src="{{ asset('images/award-3.jpg') }}" alt="award 3">
          <p>Partner award ...</p>
        </article>
        <article class="award-card">
          <img src="{{ asset('images/award-3.jpg') }}" alt="award 3">
          <p>Partner award ...</p>
        </article>
        <article class="award-card">
          <img src="{{ asset('images/award-3.jpg') }}" alt="award 3">
          <p>Partner award ...</p>
        </article>
      </div>
      <button class="carousel-btn next" data-target="awards">›</button>
    </div>
  </div>
</section>

<!-- PARTNERS -->
<section class="partners">
  <div class="container">
    <h2 class="section-title">Our Industry Partnerships</h2>
    <div class="partners-grid">
      <img src="{{ asset('images/partner1.png') }}" alt="partner">
      <img src="{{ asset('images/partner2.png') }}" alt="partner">
      <img src="{{ asset('images/partner3.png') }}" alt="partner">
      <img src="{{ asset('images/partner4.png') }}" alt="partner">
      <img src="{{ asset('images/partner5.png') }}" alt="partner">
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials">
  <div class="container">
    <h2 class="section-title">22,000+ Success Stories</h2>

    <div class="carousel-wrapper">
      <button class="carousel-btn prev" data-target="testimonials">‹</button>

      <div class="carousel" id="testimonials">
        <div class="testimonial-card">
          <p class="quote">"Very helpful team — I got my offer in 3 weeks!"</p>
          <div class="who">— Zarif A.</div>
        </div>

        <div class="testimonial-card">
          <p class="quote">"They guided through documentation and visa." </p>
          <div class="who">— Anika D.</div>
        </div>

        <div class="testimonial-card">
          <p class="quote">"Amazing pre-departure support."</p>
          <div class="who">— Nasir</div>
        </div>
        <div class="testimonial-card">
          <p class="quote">"Amazing pre-departure support."</p>
          <div class="who">— Nasir</div>
        </div>
        <div class="testimonial-card">
          <p class="quote">"Amazing pre-departure support."</p>
          <div class="who">— Nasir</div>
        </div>
        <div class="testimonial-card">
          <p class="quote">"Amazing pre-departure support."</p>
          <div class="who">— Nasir</div>
        </div>
        <div class="testimonial-card">
          <p class="quote">"Amazing pre-departure support."</p>
          <div class="who">— Nasir</div>
        </div>
      </div>

      <button class="carousel-btn next" data-target="testimonials">›</button>
    </div>

  </div>
</section>




@endsection
