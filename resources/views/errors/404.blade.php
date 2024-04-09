@extends('front.fixe')
@section('titre', '404')
@section('body')

    <div class="error-section overlay-shape">
        <div class="container">
            <div class="error-page-content">
                <div class="error-page-text">
                    <h2>Opos: Page Not Found</h2>
                    <p>The page you were looking for could not be found.</p>
                    <a href="{{ route('home') }}" class="btn btn-white">
                        Go To Homepage <i class="flaticon-right-chevron"></i>
                    </a>
                </div>
                <div class="error-page-image text-center">
                    <img src="/assets-front/images/404.png" alt="404" class="mx-auto">
                </div>
            </div>
        </div>
    </div>

@endsection
