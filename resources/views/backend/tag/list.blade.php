<div class="block-content">
    <table class="table table-vcenter" id="jsDatatable">
        <thead class="thead-light">
        <tr>
            <th class="text-center" style="width: 50px;">ID</th>
            <th>Tên</th>
            <th class="text-center" style="width: 100px;">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tags as $tag)
            <tr>
                <th class="text-center" scope="row">{{ $tag->id }}</th>
                <td class="font-w600 font-size-sm">{{ $tag->t_name }}</td>
                <td class="text-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit Client">
                            <a href="{{ route('get_backend.tag.update', $tag->id) }}" class="fa fa-fw fa-pencil-alt"></a>
                        </button>
                        <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Remove Client">
                            <a href="{{ route('get_backend.tag.delete', $tag->id) }}" class="fa fa-fw fa-times"></a>
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
