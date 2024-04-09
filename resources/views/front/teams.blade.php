@extends('front.fixe')
@section('titre', 'Teams')
@section('body')

<header class="header-page-bg overlay-shape">
    <div class="header-bottom-shape"></div>
    <div class="container">
      <div class="header-page-content">
        <small class="line-shape-bg color-white">
            {{ config("app.name") }}
        </small>
        <h1 class="color-white">Teams</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Teams</li>
          </ol>
        </nav>
      </div>
    </div>
  </header>

  <section class="team-section pt-100 pb-70">
    <div class="container">
      <div class="section-title section-title-lg">
        <small>Team Members</small>
        <h2>Our Professional Team <span>Members Will Help You</span></h2>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 pb-30">
          <div class="team-card team-card-two">
            <div class="team-card-image">
              <img src="/assets-front/images/team-member-1.jpg" alt="member" />
            </div>
            <div class="team-card-content">
              <h3><a href="team-details.html">Kolin C. Ward</a></h3>
              <h4>Performance Advisor</h4>
              <ul class="social-list">
                <li class="facebook-bg">
                  <a href="#"><i class="flaticon-facebook-1"></i></a>
                </li>
                <li class="twitter-bg">
                  <a href="#"><i class="flaticon-twitter"></i></a>
                </li>
                <li class="linkedin-bg">
                  <a href="#"><i class="flaticon-linkedin"></i></a>
                </li>
                <li class="instagram-bg">
                  <a href="#"><i class="flaticon-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 pb-30">
          <div class="team-card team-card-two">
            <div class="team-card-image">
              <img src="/assets-front/images/team-member-2.jpg" alt="member" />
            </div>
            <div class="team-card-content">
              <h3><a href="team-details.html">Ciaran H. Jet</a></h3>
              <h4>Head Of Consulting</h4>
              <ul class="social-list">
                <li class="facebook-bg">
                  <a href="#"><i class="flaticon-facebook-1"></i></a>
                </li>
                <li class="twitter-bg">
                  <a href="#"><i class="flaticon-twitter"></i></a>
                </li>
                <li class="linkedin-bg">
                  <a href="#"><i class="flaticon-linkedin"></i></a>
                </li>
                <li class="instagram-bg">
                  <a href="#"><i class="flaticon-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 pb-30">
          <div class="team-card team-card-two">
            <div class="team-card-image">
              <img src="/assets-front/images/team-member-3.jpg" alt="member" />
            </div>
            <div class="team-card-content">
              <h3><a href="team-details.html">Jecton N. Gill</a></h3>
              <h4>Commercial Director</h4>
              <ul class="social-list">
                <li class="facebook-bg">
                  <a href="#"><i class="flaticon-facebook-1"></i></a>
                </li>
                <li class="twitter-bg">
                  <a href="#"><i class="flaticon-twitter"></i></a>
                </li>
                <li class="linkedin-bg">
                  <a href="#"><i class="flaticon-linkedin"></i></a>
                </li>
                <li class="instagram-bg">
                  <a href="#"><i class="flaticon-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 pb-30">
          <div class="team-card team-card-two">
            <div class="team-card-image">
              <img src="/assets-front/images/team-member-4.jpg" alt="member" />
            </div>
            <div class="team-card-content">
              <h3><a href="team-details.html">John Richard</a></h3>
              <h4>Performance Advisor</h4>
              <ul class="social-list">
                <li class="facebook-bg">
                  <a href="#"><i class="flaticon-facebook-1"></i></a>
                </li>
                <li class="twitter-bg">
                  <a href="#"><i class="flaticon-twitter"></i></a>
                </li>
                <li class="linkedin-bg">
                  <a href="#"><i class="flaticon-linkedin"></i></a>
                </li>
                <li class="instagram-bg">
                  <a href="#"><i class="flaticon-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 pb-30">
          <div class="team-card team-card-two">
            <div class="team-card-image">
              <img src="/assets-front/images/team-member-5.jpg" alt="member" />
            </div>
            <div class="team-card-content">
              <h3><a href="team-details.html">Devid Peterson</a></h3>
              <h4>Sales Manager</h4>
              <ul class="social-list">
                <li class="facebook-bg">
                  <a href="#"><i class="flaticon-facebook-1"></i></a>
                </li>
                <li class="twitter-bg">
                  <a href="#"><i class="flaticon-twitter"></i></a>
                </li>
                <li class="linkedin-bg">
                  <a href="#"><i class="flaticon-linkedin"></i></a>
                </li>
                <li class="instagram-bg">
                  <a href="#"><i class="flaticon-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 pb-30">
          <div class="team-link-card">
            <div class="team-link-card-shape">
              <div class="team-card-shape-item">
                <img src="/assets-front/images/circle-1.png" alt="shape" />
              </div>
              <div class="team-card-shape-item">
                <img src="/assets-front/images/circle-1.png" alt="shape" />
              </div>
            </div>
            <div class="team-link-content">
              <a href="career.html"><i class="flaticon-right-arrow-2"></i></a>
              <h3>Join Team</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



@endsection