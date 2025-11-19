@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/support.css') }}">
<script src="{{ asset('js/support.js') }}"></script>

<!-- Admission Support Section -->
<section class="admission-banner">
  <div class="container admission-inner">
    
    <!-- Left Side Content -->
    <div class="admission-text">
      <span class="badge">Services</span>
      <h1>Expert Admission Support for Your Study Abroad Journey</h1>
      <p>Unlock global opportunities with seamless guidance from application to acceptance.</p>
      <a class="btn btn-primary" href="#register">Book a FREE Consultation</a>
    </div>

    <!-- Right Side Image -->
    <div class="admission-image">
      <img src="{{ asset('images/admission2.png') }}" alt="Admission Support" />
    </div>

  </div>
</section>




<section class="contact-register" id="register">
  <div class="container contact-grid">

   <!-- Left side text -->
    <div class="contact-info">
    <h2>
    <span class="black-text">Why Choose Agency for Admission Support?</h2>
      
      <p>Receive an individual consultation with the best educational consultants in 
      Bangladesh to obtain a trouble-free experience and discover the right possibilities for overseas study.
      Every year thousands of students in Bangladesh aim to start their careers abroad. In this respect, Agency Global
    has established themselves as the best admission consultants in Bangladesh. At Agency Global, we perceive that 
    students often feel apprehensive about the surcharge of information available on the internet while preparing
     for a new journey. Hence, with over a decade of experience and professional acknowledgment, our dedicated 
     team can always make the entire admission and visa application process hassle-free for the students. 
     Ultimately, we are the official representative of over 550+ universities, colleges, and institutions 
     that have optimum prestige worldwide with phenomenal courses, ethos, culture, course delivery format,
      cost, international student support, work opportunities, diversity, and location.</p>
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
</section>


<section class="features">
<div class="container features-inner">
    
    <!-- Left side text -->
    <div class="features-text">
      <h2>
      <span class="black-text">Course Selection and Admission Advice</span>
      </h2>

      <p>To guide the students in selecting the best quality of education tailored to their merit, course
         timeline, and financial abilities, our dedicated advisors start with background research and Genuine 
         Temporary Entrant (GTE) eligibility as a process of application.At Agency Global, we believe every student
          profile is unique, thus, focusing on evaluating each profile with time and care, considering past 
          education qualifications and job experience through recognition of prior learning (RPL). Indeed, 
          the extensive research on individual applicants leads us to choose what form of education will best 
          fit their interests and prepare the supporting documents. For instance, a student with a study break 
          of more than two years after completing High School or a Bachelor’s degree must provide sufficient 
          evidence explaining the reason for the gap. Again, each applicant must present firm grounds on the 
          statement of purpose behind selecting a course that would significantly increase employment upon 
          return to the home country. Fortunately, we are here to guide the students in this regard. Eventually,
           after evaluating interests, academic history, financial status, and future career goals our team 
           of devoted counselors recommends the right course and institution to the students.</p>
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
<section class="features">
<div class="container features-inner">
    
    <!-- Left side text -->
    <div class="features-text">
      <h2>
      <span class="black-text">Course Selection and Admission Advice</span>
      </h2>

      <p>To guide the students in selecting the best quality of education tailored to their merit, course
         timeline, and financial abilities, our dedicated advisors start with background research and Genuine 
         Temporary Entrant (GTE) eligibility as a process of application.At Agency Global, we believe every student
          profile is unique, thus, focusing on evaluating each profile with time and care, considering past 
          education qualifications and job experience through recognition of prior learning (RPL). Indeed, 
          the extensive research on individual applicants leads us to choose what form of education will best 
          fit their interests and prepare the supporting documents. For instance, a student with a study break 
          of more than two years after completing High School or a Bachelor’s degree must provide sufficient 
          evidence explaining the reason for the gap. Again, each applicant must present firm grounds on the 
          statement of purpose behind selecting a course that would significantly increase employment upon 
          return to the home country. Fortunately, we are here to guide the students in this regard. Eventually,
           after evaluating interests, academic history, financial status, and future career goals our team 
           of devoted counselors recommends the right course and institution to the students.</p>
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

<!---------------FAQ--------------->
<section class="faq-section">
    <h2 class="faq-title">Frequently Asked Questions</h2>
    <div class="faq-container">
        
        <!-- FAQ 1 -->
        <div class="faq-card">
            <div class="faq-question">How much do you charge for the file processing?</div>
            <div class="faq-answer">
                <p>We do not charge any kind of application or visa processing fees for the universities and 
                    colleges under our portal. Our services for our students are completely free.</p>
            </div>
        </div>

        <!-- FAQ 2 -->
        <div class="faq-card">
            <div class="faq-question">What are the top universities of Australia, Canada, USA, UK, and Malaysia?</div>
            <div class="faq-answer">
                <p>We represent more than 350 universities under our portal, and the majority of them rank high in
                     the global ranking like QS and THE. Some of the big names are Brock University, Australian
                      Catholic University, Concordia University Chicago, and many more. To know more or to get
                       the list, please contact or visit us at our office</p>
            </div>
        </div>

        <!-- FAQ 3 -->
        <div class="faq-card">
            <div class="faq-question">Can I apply to top destinations like Australia, Canada, USA, UK, and Malaysia with a study gap?</div>
            <div class="faq-answer">
                <p>Yes, you can apply but it depends on the universities If they allow with the study gap. 
                    Please fill out our form with the required details so that our professional education
                     counsellor will contact you to discuss your profile and prospects after reviewing your
                      details.</p>
            </div>
        </div>

    </div>
</section>

@endsection