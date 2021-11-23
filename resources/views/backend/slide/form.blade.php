<form action="{{ $route }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Thêm mới | Cập nhật danh mục slide</h3>
        </div>
        <div class="block-content">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="block-form1-username">Tiêu đề</label>
                    <input type="text" class="form-control form-control-alt"  name="s_title" value="{{ old('s_banner',$slide->s_title ?? '') }}">
                    @if($errors->first('s_title'))
                        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('s_title') }}</small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="block-form1-username">Mô tả</label>
                    <input type="text" class="form-control form-control-alt"  name="s_description" value="{{ old('s_description',$slide->s_description ?? '') }}">
                    @if($errors->first('s_description'))
                        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('s_description') }}</small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="block-form1-username">Link</label>
                    <input type="text" class="form-control form-control-alt"  name="s_link" value="{{ old('s_link',$slide->s_link ?? '') }}">
                    @if($errors->first('s_link'))
                        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('s_link') }}</small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="block-form1-username">Text button</label>
                    <input type="text" class="form-control form-control-alt"  name="s_text" value="{{ old('s_text',$slide->s_text ?? '') }}">
                    @if($errors->first('s_text'))
                        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('s_text') }}</small>
                    @endif
                </div>
                <div class="form-group">
                    <label>Chọn ảnh slide</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input js-custom-file-input-enabled" data-toggle="custom-file-input" id="" name="s_banner" multiple="" accept="image/*">
                        <label class="custom-file-label" for="example-file-input-multiple-custom">Chọn ảnh</label>
                    </div>
                    @if(isset($slide) && $slide->s_banner)
                        <img src="{{ pare_url_file($slide->s_banner) }}" alt="" class="img-thumbnail" style="width: 100%; height: auto; max-width: 100%; margin-top: 15px">
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
