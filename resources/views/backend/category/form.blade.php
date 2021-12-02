<form action="{{ $route }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Thêm mới | Cập nhật danh mục sản phẩm</h3>
        </div>
        <div class="block-content">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="block-form1-username">Tên</label>
                    <input type="text" class="form-control form-control-alt"  name="c_name" value="{{ old('c_name', $category->c_name ?? '') }}">
                    @if($errors->first('c_name'))
                        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('c_name') }}</small>
                    @endif
                </div>
                <div class="form-group">
                    {{--                        <label for="block-form1-username">Sản phẩm nổi bật</label>--}}
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="c_hot" id="inlineRadio1" value="0" {{ ($category->c_hot ?? 0) == 0 ? "checked":"" }}>
                        <label class="form-check-label" for="inlineRadio1">Mặc định</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="c_hot" id="inlineRadio2" value="1" {{ ($category->c_hot ?? 0) == 1 ? "checked":"" }}>
                        <label class="form-check-label" for="inlineRadio2">Nổi bật</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Chọn ảnh danh mục sản phẩm</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input js-custom-file-input-enabled"  onchange="preview()" data-toggle="custom-file-input" id="" name="c_avatar" multiple="" accept="image/*">
                        <img id="frame" src="" alt="" style="width:100px; height:100px; margin-top: 10px" >
                        <label class="custom-file-label" for="example-file-input-multiple-custom">Chọn ảnh</label>
                        <script>
                            function preview() {
                                frame.src=URL.createObjectURL(event.target.files[0]);
                            }
                        </script>
                    </div>
                    @if(isset($category) && $category->c_avatar)
                        <img src="{{ pare_url_file($category->c_avatar) }}" id="frame" alt="" class="img-thumbnail" style="width: 100%; height: auto; max-width: 100%; margin-top: 15px">
                    @endif
                </div>
                <div class="form-group mt-7">
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
