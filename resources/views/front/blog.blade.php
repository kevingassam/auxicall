@extends('front.fixe')
@section('titre', 'Blog')
@section('body')

    <header class="header-page-bg overlay-shape">
        <div class="header-bottom-shape"></div>
        <div class="container">
            <div class="header-page-content">
                <small class="line-shape-bg color-white">
                    {{ config('app.name') }}
                </small>
                <h1 class="color-white">
                    Blogs 
                    <span class="small">
                        ( {{ $blogs->count() }} )
                    </span>
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Blog
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>

    <section class="blog-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-12 col-md-6 col-lg-4 pb-30">
                        <div class="blog-card-two">
                            <div class="blog-card-entry">
                                {{ $blog->created_at }}
                            </div>
                            <div class="blog-card-inner">
                                <div class="blog-card-content">
                                    <h3>
                                        <a href="{{ route('blog_details',['id'=>$blog->id]) }}" class="text-capitalize">
                                            {{ $blog->titre }}
                                        </a>
                                    </h3>
                                </div>
                                <div class="blog-card-thumb">
                                    <a href="{{ route('blog_details',['id'=>$blog->id]) }}">
                                        <div class="card-blog-details">
                                            <img src="{{ Storage::url($blog->photo) }}" alt="blog" />
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="page-pagination">
                <nav aria-label="pagination">

                </nav>
            </div>
        </div>
    </section>

    <style>
        .card-blog-details{
            height: 200px !important;
            overflow: hidden;
        }
        .card-blog-details img{
            height: 100%!important;
            object-fit: cover;
            width: 100%;
        }
    </style>

@endsection
