@foreach($latestArticle as $blog)
    <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="blog__item">
            <div class="blog__item__pic set-bg" data-setbg="{{ pare_url_file($blog->a_avatar) }}"></div>
            <div class="blog__item__text">
                <span><img src="{{ asset('frontend/img/icon/calendar.png')}}" alt=""> {{ $blog->created_at }}</span>
                <h5>{{ $blog->a_name }}</h5>
                <a href="{{ route('get.article_detail',['slug' => $blog->a_slug]) }}">Đọc tiếp</a>
            </div>
        </div>
    </div>
@endforeach
