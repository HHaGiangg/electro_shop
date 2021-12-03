<style>
    .form-check .active a{
        color: red;
    }
    .shop__sidebar__price .active a{
        color: red;
    }
</style>
<div class="col-lg-3">
    <div class="shop__sidebar">
        <div class="shop__sidebar__search">
            <form action="#">
                <input type="text" name="k" value="{{ Request::get('k') }}" placeholder="Tìm kiếm...">
                <button type="submit"><span class="icon_search"></span></button>
            </form>
        </div>
        <div class="shop__sidebar__accordion">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-heading">
                        <a data-toggle="collapse" data-target="#collapseOne">Danh Mục</a>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="shop__sidebar__categories">
                                <ul class="nice-scroll">
                                    @foreach($categories as $category)
                                        <li><a href="{{ route('get.category',['slug'=> $category->c_slug]) }}">{{ $category->c_name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                                <div class="card">--}}
                {{--                                    <div class="card-heading">--}}
                {{--                                        <a data-toggle="collapse" data-target="#collapseTwo">Thương Hiệu</a>--}}
                {{--                                    </div>--}}
                {{--                                    <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">--}}
                {{--                                        <div class="card-body">--}}
                {{--                                            <div class="shop__sidebar__brand">--}}
                {{--                                                <ul>--}}
                {{--                                                    <li><a href="#">Louis Vuitton</a></li>--}}
                {{--                                                    <li><a href="#">Chanel</a></li>--}}
                {{--                                                    <li><a href="#">Hermes</a></li>--}}
                {{--                                                    <li><a href="#">Gucci</a></li>--}}
                {{--                                                </ul>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                <div class="card">
                    <div class="card-heading">
                        <a data-toggle="collapse" data-target="#collapseThree">Giá</a>
                    </div>
                    <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="shop__sidebar__price">
                                <ul>
                                    @for($i = 1; $i <= 5; $i++)
                                    <li class="{{ Request::get('price') == $i ? "active":""}}">
                                        <a href=" {{ request()->fullUrlWithQuery(['price'=> $i])}}"> Giá < {{ $i*2 }} triệu</a>
                                    </li>
                                    @endfor
                                    <li class="{{ Request::get('price') == $i ? "active":""}}">
                                        <a href=" {{ request()->fullUrlWithQuery(['price'=> 6])}}"> Lớn hơn 20 triệu</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-heading">
                        <a data-toggle="collapse" data-target="#collapseSix">Tags</a>
                    </div>
                    <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                        <div class="card-body">
                            @foreach($keywords ?? [] as $item)
                                <div class="shop__sidebar__tags">
                                    <a href="{{ route('get.keyword',['slug' => $item->k_slug]) }}" title="{{ $item->k_name }}">{{ $item->k_name }}</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
