@extends('Admin.master_admin')
@section('content')
<div class="page-header zvn-page-header">
    <div class="zvn-page-header-title">
        <h3>Sửa bài viết</h3>
    </div>
    <div class="zvn-page-header-breadcrumb">
        <ul class="zvn-breadcrumb-title clearfix">
            <li class="zvn-breadcrumb-item">
                <a href="index.html">
                    Trang chủ
                </a>
            </li>
            <li class="zvn-breadcrumb-item">Sửa bài viết</li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Sửa</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li class="pull-right">
                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST"
                    enctype="multipart/form-data" action="{{ route('admin.article.edit.post') }}">
                    @csrf
                    <input type="hidden" value="{{$article->id}}" name="id" />
                    <div class="form-group">
                        <label class="control-label col-12">Tiêu đề <span class="required">*</span> </label>
                        <div class="col-12">
                            <input type="text" required="required" class="form-control col-md-7 col-xs-12" name="title"
                                value="{{$article->title}}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-12" for="province">Chọn danh mục<span class="required">*</span> </label>
                        <div class="col-12">
                            <select class="form-control" name="categoryId">
                                @foreach ($categories as $category)
                                    @if($category->id == $article->id_category)
                                        <option selected value="{{$category->id}}">{{$category->name}}</option>
                                    @else
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-12">Mô tả bài viết <span class="required">*</span> </label>
                        <div class="col-12">
                            <input type="text" required="required" class="form-control col-md-7 col-xs-12"
                                name="description" value="{{$article->description}}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-12">Ảnh chính bài viết <span class="required">*</span> </label>
                        <div class="col-12">
                            <button type="button" class="btn btn-primary mb-2" onclick="$('#avatarInput').click()"><svg
                                    xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"
                                    style="width: 20px;height: 20px;vertical-align: middle;margin-right: 5px;">
                                    <path
                                        d="M320 367.79h76c55 0 100-29.21 100-83.6s-53-81.47-96-83.6c-8.89-85.06-71-136.8-144-136.8-69 0-113.44 45.79-128 91.2-60 5.7-112 43.88-112 106.4s54 106.4 120 106.4h56"
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="32"></path>
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="32"
                                        d="M320 255.79l-64-64-64 64M256 448.21V207.79"></path>
                                </svg>Chọn
                                ảnh từ máy tính...</button>

                            <input type="file" accept=".png, .jpg, .jpeg" id="avatarInput" class="hidden"
                                name="background_image" required="required" />
                            <div
                                class="preview-images-zone ui-sortable preview-images-zone__avatar preview-article-thumbnail">
                                <div class="preview-image preview-avatar-show ui-sortable-handle">
                                    <div class="image-cancel avatar-image-cancel"><span
                                            class="image-cancel__icon">x</span></div>
                                    <div class="image-zone"><img src="{{asset('assets/upload/article/'.$article->background_image)}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-12">Nội dung<span class="required">*</span> </label>
                        <div class="col-12">
                            <!-- <input name="about"  type="hidden">
                            <div id="editor-container"></div> -->
                            <textarea class="ckeditor" name="content" id="editor">
                            {{$article->content}}
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-4" for="province">Nút đăng ký<span class="required">*</span> </label>
                        <div class="col-12">
                            <select class="form-control" name="btnRegister">
                                        <option selected value="1">Hiển thị</option>
                                        <option selected value=0">Không hiển thị</option>
                            </select>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
