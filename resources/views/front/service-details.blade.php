@extends('front.fixe')
@section('titre', $service->name)
@section('body')


    <header class="header-page-bg overlay-shape">
        <div class="header-bottom-shape"></div>
        <div class="container">
            <div class="header-page-content">
                <small class="line-shape-bg color-white">
                    {{ config('app.name') }}
                </small>
                <h1 class="color-white">
                    {{ $service->name }}
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">
                            <a href="services.html">Services</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $service->name }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>

    <div class="service-details-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-8">
                    <div class="service-details-item">
                        <div class="service-details-thumb">
                            <img src="{{ Storage::url($service->icone) }} " alt class="w-100" />
                        </div>
                        <div class="service-details-content">
                            <h3>{{ $service->name }}</h3>
                            <p>
                                {{ $service->description }}
                            </p>
                            <br><br>
                            <h3>
                                Autres services
                            </h3>
                            <div class="service-details-grid">
                                @foreach ($services as $item)
                                    <div class="service-details-grid-item">
                                        <a href="{{ route('services_details', ['id' => $item->id]) }}"
                                            class="redirect-link">
                                            <img src="{{ Storage::url($item->icone) }}" alt="service"
                                                style="height: 100px !important" />
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-4 pb-30">
                    <div class="sidebar-item mb-30">
                        <div class="sidebar-search">
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Search..." />
                                    <button class="btn"><i class="flaticon-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-item mb-30">
                        <div class="sidebar-title">
                            <h3>
                                Derniers services
                            </h3>
                        </div>
                        <div class="sidebar-content">
                            <ul class="sidebar-category">
                                @foreach ($services as $item)
                                    <li>
                                        <a href="{{ route('services_details', ['id' => $item->id]) }}">
                                            {{ $item->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
