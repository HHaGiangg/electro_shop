<div class="block-content">
    <table class="table table-vcenter">
        <thead class="thead-light">
        <tr>
            <th class="text-center" style="width: 50px;">ID</th>
            <th>Tên</th>
            <th class="text-center" style="width: 100px;">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($keywords as $keyword)
            <tr>
                <th class="text-center" scope="row">{{ $keyword->id }}</th>
                <td class="font-w600 font-size-sm">{{  $keyword->k_name }}</td>
                <td class="text-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit Client">
                            <a href="{{ route('get_backend.keyword.update', $keyword->id) }}" class="fa fa-fw fa-pencil-alt"></a>
                        </button>
                        <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Remove Client">
                            <a href="{{ route('get_backend.keyword.delete', $keyword->id) }}" class="fa fa-fw fa-times"></a>
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
