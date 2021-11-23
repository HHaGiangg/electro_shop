<div class="block-content">
    <table class="table table-vcenter">
        <thead class="thead-light">
        <tr>
            <th class="text-center" style="width: 50px;">ID</th>
            <th class="text-center">Tên</th>
            <th class="text-center">Email</th>
            <th class="text-center">Điện thoại</th>
            <th class="text-center" style="width: 100px;">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th class="text-center" scope="row">{{ $user->id }}</th>
                <td class="font-w600 font-size-sm">{{ $user->name }}</td>
                <th class="text-center" >{{ $user->email }}</th>
                <th class="text-center" >{{ $user->phone }}</th>
                <td class="text-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Remove Client">
                            <a href="{{ route('get_backend.user.delete', $user->id) }}" class="fa fa-fw fa-times"></a>
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
