@extends('client.layouts.master')

@section('meta_title')
Chi tiết bài viết
@endsection

@section('content')
<main class="main-content">
    <!-- Phần tiêu đề -->
    <section class="page-title-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 m-auto">
                    <div class="page-title-content text-center">
                        <h2 class="title">Bài viết</h2>
                        <div class="bread-crumbs">
                            <a href="/">Trang chủ</a>
                            <span class="breadcrumb-sep"> // </span>
                            <span class="active">Bài viết</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nội dung bài viết -->
    <section class="blog-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="post-details-content">
                        <div class="post-details-body">
                            @if($blog->image)
                            <div class="thumb">
                                <img class="w-100" src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->title }}">
                            </div>
                            @endif

                            <div class="content">
                                <div class="meta">
                                    Tác giả: <a class="author" href="#">{{ $blog->author_name }}</a>
                                    <span class="dots"></span>
                                    <span class="post-date">{{ date('d/m/Y', strtotime($blog->created_at)) }}</span>
                                </div>
                                <h4 class="title">{{ $blog->title }}</h4>

                                <!-- Hiển thị nội dung HTML -->
                                <div class="post-content">
                                    {!! $blog->content !!}
                                </div>
                            </div>
                        </div>
                    </div>



                    

                    <!-- related post -->
                    <section class="section-padding bg-gray">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title text-center">
                                        <h2 class="title">Bài viết liên quan</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach($relatedPosts as $post)
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="single-blog-post">
                                        @if($post->image)
                                        <div class="thumb">
                                            <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}" class="img-fluid" style="height:250px; width: auto; object-fit: cover;">
                                        </div>
                                        @endif
                                        <div class="post-meta mt-2">
                                            <span class="date"><i class="far fa-calendar-alt"></i> {{ date('d/m/Y', strtotime($post->created_at)) }}</span>
                                        </div>
                                        <h5 class="mt-2" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis; min-height: 3em; line-height: 1.5em;">
                                            <a href="/blog/{{ $post->id }}" style="color: inherit; text-decoration: none;">{{ $post->title }}</a>
                                        </h5>
                                        <p class="excerpt" style="margin-top: 0.5rem;">{{ Str::limit(strip_tags($post->content), 90) }}</p>
                                        <a class="btn-theme" href="/blog/{{ $post->id }}"
                                            style="
                                                border-radius: 40px;
                                                width: 150px;
                                                height: 3vw;
                                                display: flex;
                                                align-items: center;
                                                justify-content: center;
                                                text-decoration: none;
                                                padding: 0 20px;
                                            ">
                                            Xem thêm
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
