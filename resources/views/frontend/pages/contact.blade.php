@extends('frontend.layouts.app')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">Contact Information</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pb contact-section">
    <div class="container">
      <div class="row d-flex contact-info">
        <div class="col-md-3 d-flex">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-map-signs"></span>
                </div>
                <h3 class="mb-4">Address</h3>
              <p>Pidie Jaya,Nanggroe Aceh Darussalam, Indonesia</p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-phone2"></span>
                </div>
                <h3 class="mb-4">Contact Number</h3>
              <p><a href="tel://1234567920">+62 812 634 235 38</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-paper-plane"></span>
                </div>
                <h3 class="mb-4">Email Address</h3>
              <p><a href="mailto:info@yoursite.com">almadani279@gmail.com</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-globe"></span>
                </div>
                <h3 class="mb-4">Website</h3>
              <p><a href="#">Pariwisata Pidie Jaya</a></p>
            </div>
        </div>
      </div>
    </div>
  </section>
          
      <section class="ftco-section contact-section">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-6 order-md-last d-flex">
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

        <div class="col-md-6 d-flex">
            <div id="map" class="bg-white"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-subscribe" style="background-image: url(images/bg_1.jpg);">
    <div class="overlay">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10 text-wrap text-center heading-section ftco-animate">
            <h2>Subcribe to our Newsletter</h2>
            <div class="row d-flex justify-content-center mt-4 mb-4">
              <div class="col-md-10">
                <form action="#" class="subscribe-form">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Enter email address">
                    <input type="submit" value="Subscribe" class="submit px-3">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection