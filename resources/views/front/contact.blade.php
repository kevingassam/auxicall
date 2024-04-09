@extends('front.fixe')
@section('titre', 'Contact')
@section('body')


<header class="header-page-bg overlay-shape">
    <div class="header-bottom-shape"></div>
    <div class="container">
      <div class="header-page-content">
        <small class="line-shape-bg color-white">
            {{ config("app.name") }}
        </small>
        <h1 class="color-white">Contact Us</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Contact Us
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </header>

  <section class="contact-us-section pt-100 pb-70">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-12 col-lg-6 pb-30">
          <div class="contact-us-item contact-us-image text-center">
            <img src="/assets-front/images/contact-us-image.jpg" alt="image" />
          </div>
        </div>
        <div class="col-12 col-lg-6 pb-30">
          <div class="contact-us-item max-585 mx-auto mx-lg-0">
            <div class="sub-section-title">
              <h3>Leave A Message</h3>
              <p>
                No more than 2 working days since receiving your issue ticket.
              </p>
            </div>
            @livewire('formContact')
            
          </div>
        </div>
      </div>
    </div>
  </section>



  @endsection