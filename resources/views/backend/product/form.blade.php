<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-7">
            <!-- Table Head Light -->
            <div class="block block-rounded">
                <div class="block-header">
                    <h3 class="block-title">Thêm mới | <a href="{{ route('get_backend.product.index') }}" class="btn btn-sm btn-alt-info">Danh sách</a></h3>
                </div>
                <div class="block-content">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="block-form1-username">Tên</label>
                            <input type="text" class="form-control form-control-alt"  name="pro_name" value="{{ old('pro_name', $product->pro_name ?? '') }}">
                            @if($errors->first('pro_name'))
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('pro_name') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="block-form1-username">Danh mục sản phẩm</label>
                            <select name="pro_category_id" id="" class="form-control form-control-alt">
                                <option value="pro_category_id">__Chọn danh mục__</option>
                                @foreach($categories as $item)
                                    <option value="{{ $item->id }}" {{ old('pro_category_id',$product->pro_category_id ?? 0) == $item->id ? "selected" : "" }}>{{ $item->c_name }}</option>
                                @endforeach
                            </select>
                            @if($errors->first('pro_price'))
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('pro_price') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="block-form1-username">Mô tả sản phẩm</label>
                            <textarea name="pro_description" id="" class="form-control form-control-alt" cols="30" rows="3">{{ old('pro_description', $product->pro_description ?? '') }}</textarea>
                            @if($errors->first('pro_description'))
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('pro_description') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="block-form1-username">Từ khóa sản phẩm</label>
                            <select name="keywords[]" id="" class="form-control form-control-alt js-tags" multiple>
                                <option value="">__Chọn từ khóa sản phẩm__</option>
                                @foreach($keywords as $keyword)
                                    <option value="{{ $keyword->id }}" {{ in_array($keyword->id, $keywordOld) ? "selected":"" }} >{{ $keyword->k_name }}</option>
                                @endforeach
                            </select>
                            @if($errors->first('a_menu_id'))
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('a_menu_id') }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="block-form1-username">Nội dung sản phẩm</label>
                            <textarea name="pro_content" id="content" class="form-control form-control-alt" cols="30" rows="3">{{ old('pro_content', $product->pro_content ?? '') }}</textarea>
                            @if($errors->first('pro_content'))
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('pro_content') }}</small>
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
                        <label for="block-form1-username">Giá sản phẩm</label>
                        <input type="text" class="form-control form-control-alt"  name="pro_price" value="{{ old('pr_price', $product->pro_price ?? 0) }}">
                        @if($errors->first('pro_price'))
                            <small id="emailHelp" class="form-text text-danger">{{ $errors->first('pro_price') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="block-form1-username">Số lượng sản phẩm</label>
                        <input type="text" class="form-control form-control-alt"  name="pro_number" value="{{ old('pro_number', $product->pro_number ?? 0) }}">
                        @if($errors->first('pro_number'))
                            <small id="emailHelp" class="form-text text-danger">{{ $errors->first('pro_number') }}</small>
                        @endif
                    </div>
                    <div class="form-group">
{{--                        <label for="block-form1-username">Sản phẩm nổi bật</label>--}}
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pro_hot" id="inlineRadio1" value="0" {{ ($product->pro_hot ?? 0) == 0 ? "checked":"" }}>
                            <label class="form-check-label" for="inlineRadio1">Mặc định</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pro_hot" id="inlineRadio2" value="1" {{ ($product->pro_hot ?? 0) == 1 ? "checked":"" }}>
                            <label class="form-check-label" for="inlineRadio2">Nổi bật</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Chọn ảnh sản phẩm</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input js-custom-file-input-enabled" data-toggle="custom-file-input" id="" name="pro_avatar" multiple="" accept="image/*">
                            <label class="custom-file-label" for="example-file-input-multiple-custom">Chọn ảnh</label>
                        </div>
                        @if(isset($product) && $product->pro_avatar)
                            <img src="{{ pare_url_file($product->pro_avatar) }}" alt="" class="img-thumbnail" style="width: 100%; height: auto; max-width: 100%; margin-top: 15px">
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
