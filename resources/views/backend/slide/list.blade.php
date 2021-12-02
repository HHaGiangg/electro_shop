<div class="block-content">
    <table class="table table-vcenter" id="jsDatatable">
        <thead class="thead-light">
        <tr>
            <th class="text-center" style="width: 50px;">ID</th>
            <th class="text-center" >Ảnh</th>
            <th class="text-center" >Tên</th>
            <th class="text-center" >Kích hoạt</th>
            <th class="text-center" style="width: 100px;">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($slides as $slide)
            <tr>
                <th class="text-center" scope="row">{{ $slide->id }}</th>
                <th class="text-center" scope="row">
                    <a href="">
                        <img src="{{ pare_url_file($slide->s_banner) }}" class="img-thumbnail" style="width: 97px; height: 58px" alt="">
                    </a>
                </th>
                <td  class="text-center">{{$slide->s_title}}</td>
                <td  class="text-center">
                    @if($slide -> s_active	 == 1)
                        <a href="{{ route('get_backend.slide.active', $slide->id) }}" class="btn btn-sm btn-success">Hiện</a>
                    @else
                        <a href="{{ route('get_backend.slide.active', $slide->id) }}" class="btn btn-sm btn-dark">Ẩn</a>
                    @endif
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit Client">
                            <a href="{{ route('get_backend.slide.update', $slide->id) }}" class="fa fa-fw fa-pencil-alt"></a>
                        </button>
                        <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Remove Client">
                            <a href="{{ route('get_backend.slide.delete', $slide->id) }}" class="fa fa-fw fa-times"></a>
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
