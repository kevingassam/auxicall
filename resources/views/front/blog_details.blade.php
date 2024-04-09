@extends('front.fixe')
@section('titre', $article->titre)
@section('body')


    <header class="header-page-bg overlay-shape">
        <div class="header-bottom-shape"></div>
        <div class="container">
            <div class="header-page-content">
                <small class="line-shape-bg color-white">
                    {{ config('app.name') }}
                </small>
                <h1 class="color-white">Blog Details</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $article->titre }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>

    <div class="blog-details-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 pb-30">
                    <div class="blog-details-item desk-pad-right-20">
                        <article class="blog-details-box mb-30">
                            <div class="blog-post-image">
                                <img src="{{ Storage::url($article->photo) }}" alt="blog" />
                            </div>
                            <div class="blog-post-details">
                                <div class="blog-entry-box">
                                    <i class="flaticon-calendar-1"></i>{{ $article->created_at }}
                                </div>
                                <h3>
                                    {{ $article->titre }}
                                </h3>
                                <p>
                                    {!! $article->description !!}
                                </p>
                            </div>
                        </article>

                    </div>
                </div>
                <div class="col-12 col-lg-4 pb-30">
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
                            <h3>Recent Posts</h3>
                        </div>
                        <div class="blog-recent-content">
                            @foreach ($rescents as $item)
                            <div class="blog-recent-content-item">
                                <div class="blog-recent-content-image">
                                    <a href="{{ route('blog_details',['id'=>$item->id]) }}">
                                        <img src="{{ Storage::url($item->photo) }}" alt="recent" />
                                    </a>
                                </div>
                                <div class="blog-recent-content-details">
                                    <h3>
                                        <a href="{{ route('blog_details',['id'=>$item->id]) }}">
                                            {{ $item->titre }}
                                        </a>
                                    </h3>
                                    <ul class="blog-entry-holder">
                                        <li class="blog-holder-date">
                                            {{ $item->created_at }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
