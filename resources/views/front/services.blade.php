@extends('front.fixe')
@section('titre', 'Services')
@section('body')


    <header class="header-page-bg overlay-shape">
        <div class="header-bottom-shape"></div>
        <div class="container">
            <div class="header-page-content">
                <small class="line-shape-bg color-white">
                    {{ config('app.name') }}
                </small>
                <h1 class="color-white">Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Services
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>

    <section class="service-section pt-100">
        <div class="container">
            <div class="section-title section-title-lg">
                <small>Cybersecurity Services</small>
                <h2>
                    Cyber Security Solutions & Technology Aid
                    <span>Entire Solution</span>
                </h2>
            </div>
            <div class="service-item-grid d-flex flex-wrap">
                @foreach ($services as $service)
                    <div class="service-item-list service-box-two">
                        <div class="service-box-icon">
                            <img src="{{ Storage::url($service->icone ) }}" style="height: 150px !important">
                        </div>
                        <div class="service-box-text">
                            <h3>
                                {{ $service->name }}
                            </h3>
                            <p>
                                {{ $service->description }}
                            </p>
                            <p>
                                <a href="{{ route('services_details',["id"=>$service->id] )}}" class="redirect-link">
                                    Détails
                                    <i class="flaticon-right-arrow-2"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection
