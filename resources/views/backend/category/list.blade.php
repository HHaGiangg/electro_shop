<div class="block-content">
    <table class="table table-vcenter">
        <thead class="thead-light">
        <tr>
            <th class="text-center" style="width: 50px;">ID</th>
            <th>Ảnh</th>
            <th>Tên</th>
            <th>Trạng Thái</th>
            <th class="text-center" style="width: 100px;">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th class="text-center" scope="row">{{ $category->id }}</th>
                <th class="text-center" scope="row">
                    <a href="">
                        <img src="{{pare_url_file($category->c_avatar )}}" class="img-thumbnail" style="width: 60px; height: 60px" alt="">
                    </a>
                </th>
                <td class="font-w600 font-size-sm">{{  $category->c_name }}</td>
                <td class="font-w600 font-size-sm">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" disabled id="inlineRadio2" value="1" {{ $category->c_hot == 1  ? "checked" : "" }}>
                        <label class="form-check-label" for="inlineRadio2">Nổi bật</label>
                    </div>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit Client">
                            <a href="{{ route('get_backend.category.update', $category->id) }}" class="fa fa-fw fa-pencil-alt"></a>
                        </button>
                        <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Remove Client">
                            <a href="{{ route('get_backend.category.delete', $category->id) }}" class="fa fa-fw fa-times"></a>
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
