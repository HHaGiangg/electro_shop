<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-7">
            <!-- Table Head Light -->
            <div class="block block-rounded">
                <div class="block-header">
                    <h2 class="block-title">Thêm mới |<a href="{{ route('get_backend.article.index') }}" class="btn btn-sm btn-alt-info">Danh sách</a></h2>
                </div>
                <div class="block-content">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="block-form1-username">Tên</label>
                            <input type="text" class="form-control form-control-alt"  name="a_name" value="{{ old('a_name', $article->a_name ?? '') }}">
                            @if($errors->first('a_name'))
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('a_name') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="block-form1-username">Danh mục bài viết</label>
                            <select name="a_menu_id" id="" class="form-control form-control-alt">
                                <option value="a_menu_id">__Chọn danh mục bài viết__</option>
                                @foreach($menus as $menu)
                                    <option value="{{ $menu->id }}" {{ old('a_menu_id',$article->a_menu_id ?? 0) == $menu->id ? "selected" : "" }}>{{ $menu->mn_name }}</option>
                                @endforeach
                            </select>
                            @if($errors->first('a_menu_id'))
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('a_menu_id') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="block-form1-username">Tag bài viết</label>
                            <select name="tags[]" id="" class="form-control form-control-alt js-tags" multiple>
                                <option value="">__Chọn tag bài viết__</option>
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}" {{ in_array($tag->id, $tagOld) ? "selected":"" }} >{{ $tag->t_name }}</option>
                                @endforeach
                            </select>
                            @if($errors->first('a_menu_id'))
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('a_menu_id') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="block-form1-username">Mô tả bài viết</label>
                            <textarea name="a_description" id="" class="form-control form-control-alt" cols="30" rows="3">{{ old('a_description', $article->a_description ?? '') }}</textarea>
                            @if($errors->first('a_description'))
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('a_description') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="block-form1-username">Nội dung bài viết</label>
                            <textarea name="a_content" id="content" class="form-control form-control-alt" cols="30" rows="3">{{ old('a_content', $article->a_content ?? '') }}</textarea>
                            @if($errors->first('a_content'))
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('a_content') }}</small>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Table Head Light -->
        </div>

        <div class="col-md-5">
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="form-group">
                        <label>Chọn ảnh sản phẩm</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input js-custom-file-input-enabled" data-toggle="custom-file-input" id="" name="a_avatar" multiple="" accept="image/*">
                            <label class="custom-file-label" for="example-file-input-multiple-custom">Chọn ảnh</label>
                        </div>
                        @if(isset($article) && $article->a_avatar)
                            <img src="{{ pare_url_file($article->a_avatar) }}" alt="" class="img-thumbnail" style="width: 100%; height: auto; max-width: 100%; margin-top: 15px">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="block-options">
            <button type="submit" class="btn btn-sm btn-primary">
                Xử lý thông tin
            </button>
        </div>
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
<script src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=1234AVC',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=1234AVC'
    };
    CKEDITOR.replace('content', options);
    $(document).ready(function(){
        $("#content").click(function(event){
            console.log(111)
        });
    });
</script>

