<form action="{{ $route }}" method="POST">
    @csrf
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Thêm mới | Cập nhật danh mục blog</h3>
        </div>
        <div class="block-content">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="block-form1-username">Tên</label>
                    <input type="text" class="form-control form-control-alt"  name="mn_name" value="{{ old('mn_name', $menu->mn_name ?? '') }}">
                    @if($errors->first('mn_name'))
                        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('mn_name') }}</small>
                    @endif
                </div>
                <div class="form-group">
                    <div class="block-options">
                        <button type="submit" class="btn btn-sm btn-primary">
                            Xử lý thông tin
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
