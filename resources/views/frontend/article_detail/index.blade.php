@extends('layouts.app_frontend')
@section('title',$article->a_name)
@section('content')
    <!-- Blog Details Hero Begin -->
    <section class="blog-hero spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="blog__hero__text">
                        <h2>{{ $article->a_name }}</h2>
                        <ul>
                            <li>By Deercreative</li>
                            <li>{{ $article->created_at }}</li>
                            <li>8 Comments</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->
    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="blog__details__pic">
                        <img src="{{ pare_url_file($article->a_avatar)}}" alt="{{ $article->a_name }}">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__share">
                            <span>share</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="blog__details__text">
                            <p>
                                {{ $article->a_description }}
                            </p>
                        </div>

                        <div class="blog__details__text">
                            <p>
                                {!! $article->a_content !!}
                            </p>
                        </div>
                        <div class="blog__details__option">
                            <div class="row">
{{--                                <div class="col-lg-6 col-md-6 col-sm-6">--}}
{{--                                    <div class="blog__details__author">--}}
{{--                                        <div class="blog__details__author__pic">--}}
{{--                                            <img src="{{ asset('frontend/img/blog/details/blog-author.jpg')}}" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="blog__details__author__text">--}}
{{--                                            <h5>Aiden Blair</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                @foreach($tags ?? [] as $item)
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="blog__details__tags">
                                        <a href="{{ route('get.tag', ['slug' => $item->t_slug]) }}" title="{{ $item->t_name }}">#{{ $item->t_name }}</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="blog__details__btns">
                            <div class="row">
                                @if($articlePrevious)
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <a href="{{ route('get.article_detail', ['slug'=> $articlePrevious->a_slug]) }}" class="blog__details__btns__item">
                                        <p><span class="arrow_left"></span> Bài viết trước</p>
                                        <h5>{{ $articlePrevious->a_name }}</h5>
                                    </a>
                                </div>
                                @endif
                                @if($articleNext)
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <a href="{{ route('get.article_detail', ['slug'=> $articleNext->a_slug]) }}" class="blog__details__btns__item blog__details__btns__item--next">
                                        <p>Bài viết tiếp theo <span class="arrow_right"></span></p>
                                        <h5>{{ $articleNext->a_name }}</h5>
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="blog__details__quote">
                            <i class="fa fa-quote-left"></i>
                            <p>“When designing an advertisement for a particular product many things should be
                                researched like where it should be displayed.”
                            </p>
                            <h6>_ John Smith _</h6>
                        </div>
                        <div class="blog__details__comment">
                            <h4>Để lại bình luận của bạn</h4>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <input type="text" placeholder="Email">
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <input type="text" placeholder="Phone">
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <textarea placeholder="Comment"></textarea>
                                        <button type="submit" class="site-btn">Post Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->
@endsection
