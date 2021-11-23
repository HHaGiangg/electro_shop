<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="blog__item">
        <div class="blog__item__pic set-bg"  data-setbg="{{ pare_url_file($item->a_avatar) }}" alt="{{ $item->a_name }}"></div>
        <div class="blog__item__text">
            <span><img src="{{ asset('frontend/img/icon/calendar.png')}}" alt=""> {{ $item->created_at }}</span>
            <span><a href="" title="{{ $item->menu->mn_name ?? "" }}" class="btn btn-xs btn-info" style="font-size: 8px">{{ $item->menu->mn_name ?? "" }}</a></span>
            <h5>{{ $item->a_name }}</h5>
            <a href="{{ route('get.article_detail',['slug' => $item->a_slug]) }}">Đọc Tiếp</a>
        </div>
    </div>
</div>
