@extends('frontend.layouts.app')
@section('content')
<header class="text-center" style="margin-bottom: -70px;background-image: url({{ asset('assets/frontend/images/bg_2.jpg') }})">
    <h1>
        Contact Us
    </h1>
</header>    

  <section class="ftco-section ftco-no-pb contact-section" style="margin-top: 100px">
    <div class="container">
      <div class="row d-flex contact-info">
        <div class="col-md-3 d-flex">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-map-signs"></span>
                </div>
                <h3 class="mb-4">Address</h3>
              <p>{{ $setting->address }}</p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-phone2"></span>
                </div>
                <h3 class="mb-4">Contact Number</h3>
              <p><a href="tel://1234567920">{{ $setting->phone_number }}</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-paper-plane"></span>
                </div>
                <h3 class="mb-4">Email Address</h3>
              <p><a href="mailto:info@yoursite.com">{{ $setting->email }}</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-globe"></span>
                </div>
                <h3 class="mb-4">Website</h3>
              <p><a href="#">{{ $setting->name }}</a></p>
            </div>
        </div>
      </div>
    </div>
  </section>
          
<section class="ftco-section contact-section">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-6 order-md-last">
          <form action="{{ route('contact.store') }}" method="post" class="bg-light p-5 contact-form">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Your Name" required="required">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="required">
            </div>
            <div class="form-group">
              <input type="number" class="form-control" name="phone_number" placeholder="Your Number" required="required">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="required">
            </div>
            <div class="form-group">
              <textarea cols="30" rows="7" name="text" class="form-control" placeholder="Message" required="required"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" name="submit_msg" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        
        </div>

        <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb={{ $setting->map }}" class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
</section>
@endsection