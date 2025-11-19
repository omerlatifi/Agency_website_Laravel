@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/scholarships.css') }}">
<script src="{{ asset('js/scholarships.js') }}"></script>
<!-- Admission Support Section -->
<section class="admission-banner">
  <div class="container admission-inner">
    
    <!-- Left Side Content -->
    <div class="admission-text">
      <span class="badge">Scholarships</span>
      <h1>Scholarships in {{ $country }}</h1>
      <p>Get comprehensive guidance & end-to-end assistance from expert study abroad mentors for FREE!.</p>
       <a class="btn btn-primary" href="#register">Book a FREE Consultation</a>
    </div>

    <!-- Right Side Image -->
    <div class="admission-image">
      <img src="{{ asset('images/feature.png') }}" alt="Admission Support" />
    </div>

  </div>
</section>

  
<section class="features">
<div class="container features-inner">
    
    <!-- Left side text -->
   <div class="features-text">
     <!-- Jump to Topic Dropdown -->
      <div class="jump-box">
  <div class="jump-header" id="jumpToggle">
    <span class="jump-title">Jump to Topic</span>
    <span class="jump-divider">|</span>
    <span class="jump-subtitle">Contents</span>
    <span class="jump-arrow">&#9662;</span> <!-- ▼ arrow -->
  </div>
@foreach($scholarships as $item)
  <ul class="jump-list">
    <li><a href="#scholarships">{{ $item->heading1 }}</a></li>
    <li><a href="#why">{{ $item->heading2 }}</a></li>
    <li><a href="#types">{{ $item->heading3 }}</a></li>
    <li><a href="#major">{{ $item->heading4 }}</a></li>
    <li><a href="#apply">{{ $item->heading5 }}</a></li>
    <li><a href="#faq">FAQs</a></li>
  </ul>
</div>

    <section id="scholarships">
    <h2><span class="black-text">{{ $item->heading1 }}</span></h2>

      <p>{!! nl2br(e( $item->paragraph1)) !!}</p>
    </section>
   
    <section id="why">
    <h2><span class="black-text">{{ $item->heading2 }}</span></h2>
     <p>{!! nl2br(e( $item->paragraph2)) !!}</p>
    </section>
   <section id="types">
    <h2><span class="black-text">{{ $item->heading3 }}</span></h2>

    <p>{!! nl2br(e( $item->paragraph3)) !!}</p>
   </section>
   <section id="major">
    <h2><span class="black-text">{{ $item->heading4 }}</span></h2>

     <p>{!! nl2br(e( $item->paragraph4)) !!}</p>
   </section>
   <section id="apply">
    <h2><span class="black-text">{{ $item->heading5 }}</span></h2>

      <p>{!! nl2br(e( $item->paragraph5)) !!}</p>
   </section>
   <section id="bangladesh">
    <h2><span class="black-text">Agency Bangladesh Scholarship Support</span></h2>

      <p>ffffffffffffffffffffffffffffffff</p>
   </section>
    @endforeach
</div>
    <!-- right  side text -->
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
     

<!---------------FAQ--------------->
<section id="faq" class="faq-section">
    <h2 class="faq-title">Frequently Asked Questions</h2>
    <div class="faq-container">
        
        <!-- FAQ 1 -->
        <div class="faq-card">
            <div class="faq-question">What kind of student accommodation options can I find?</div>
            <div class="faq-answer">
                <p>Both platforms offer verified student housing near major universities—ranging from shared apartments and studios to ensuite rooms and private flats—based on your preferences and budget.</p>
            </div>
        </div>

        <!-- FAQ 2 -->
        <div class="faq-card">
            <div class="faq-question">Can I compare prices and facilities before booking?</div>
            <div class="faq-answer">
                <p>Yes, both platforms allow you to compare facilities, pricing, and reviews to help you choose the best option.</p>
            </div>
        </div>

        <!-- FAQ 3 -->
        <div class="faq-card">
            <div class="faq-question">Is it safe to book accommodation through these platforms?</div>
            <div class="faq-answer">
                <p>Absolutely, they work with verified and trusted housing providers ensuring safety and reliability.</p>
            </div>
        </div>

    </div>
</section>




@endsection