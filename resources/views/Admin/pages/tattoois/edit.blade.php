@extends('Admin.master_admin')
@section('content')
<div class="page-header zvn-page-header">
    <div class="zvn-page-header-title">
        <h3>Chỉnh sửa</h3>
    </div>
    <div class="zvn-page-header-breadcrumb">
        <ul class="zvn-breadcrumb-title clearfix">
            <li class="zvn-breadcrumb-item">
                <a href="index.html">
                    Trang chủ
                </a>
            </li>
            <li class="zvn-breadcrumb-item">Chỉnh sửa</li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Chỉnh sửa</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li class="pull-right">
                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <div class="alert alert-danger alert-dismissible fade in zvn-alert" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <strong><i class="fa fa-exclamation-triangle"></i> Xảy ra lỗi!</strong>
                    <p><strong>- Tên :</strong> không được rỗng</p>
                    <p><strong>- Username:</strong> không có dấu</p>
                    <p><strong>- Password:</strong> phải có ký tự đặc biệt</p>
                </div>
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                    enctype="multipart/form-data" method="POST" action="{{route('admin.uploadProductImages')}}">
                    @csrf
                    <input id="employeeId" name="employeeId" type="hidden" value="{{$tattoisInformation->id}}">
                    <input id="deletedImagesString" name="deletedImagesString" type="hidden">
                    <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tên <span
                                class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="name" required="required" class="form-control col-md-7 col-xs-12"
                                value="{{ $tattoisInformation->name }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="avatar">Avatar <span
                                class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" id="avatar" required="required"
                                class="form-control col-md-7 col-xs-12" />
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="avatar">Ảnh tiểu sử <span
                                class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <button type="button" class="btn btn-primary mb-2"
                                onclick="$('#employeeImagesInput').click()"><i class="fas fa-upload mr-1"></i>Chọn
                                ảnh...</button>
                            <input type="file" accept=".png, .jpg, .jpeg" id="employeeImagesInput"
                                name="employeeImagesInput[]" class="hidden" multiple="multiple" />
                            <div class="preview-images-zone ui-sortable employee">
                                @foreach ($tattoisInformation->employeeImages()->get() as $key=>$employeeImage)
                                <div class="preview-image preview-employee-show-{{ $key }} ui-sortable-handle">
                                    <div class="image-cancel employee-image-cancel" data-no="{{ $key }}"><span
                                            class="image-cancel__icon">x</span></div>
                                    <div class="image-zone" data-name="{{$employeeImage->image}}"><img
                                            id="pro-img-{{ $key }}"
                                            src="{{ asset('assets/images/employee/'.$employeeImage->image) }}">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- <div class="preview-image preview-show-1 ui-sortable-handle">
            <div class="image-cancel" data-no="1">x</div>
            <div class="image-zone"><img id="pro-img-1" src="https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA5Ny85NTkvb3JpZ2luYWwvc2h1dHRlcnN0b2NrXzYzOTcxNjY1LmpwZw=="></div>
            <div class="tools-edit-image"><a href="javascript:void(0)" data-no="1" class="btn btn-light btn-edit-image">edit</a></div>
        </div>
        <div class="preview-image preview-show-2 ui-sortable-handle">
            <div class="image-cancel" data-no="2">x</div>
            <div class="image-zone"><img id="pro-img-2" src="https://www.codeproject.com/KB/GDI-plus/ImageProcessing2/flip.jpg"></div>
            <div class="tools-edit-image"><a href="javascript:void(0)" data-no="2" class="btn btn-light btn-edit-image">edit</a></div>
        </div>
        <div class="preview-image preview-show-3 ui-sortable-handle">
            <div class="image-cancel" data-no="3">x</div>
            <div class="image-zone"><img id="pro-img-3" src="http://i.stack.imgur.com/WCveg.jpg"></div>
            <div class="tools-edit-image"><a href="javascript:void(0)" data-no="3" class="btn btn-light btn-edit-image">edit</a></div>
        </div> -->

                    <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="avatar">Ảnh sản phẩm <span
                                class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <button type="button" class="btn btn-primary mb-2"
                                onclick="$('#productImagesInput').click()"><i class="fas fa-upload mr-1"></i>Chọn
                                ảnh...</button>
                            <input type="file" accept=".png, .jpg, .jpeg" id="productImagesInput" required="required"
                                class="hidden" multiple />
                            <div class="preview-images-zone ui-sortable product">
                                @foreach ($tattoisInformation->productImages()->get() as $key=>$productImage)
                                <div class="preview-image preview-product-show-{{ $key }} ui-sortable-handle">
                                    <div class="image-cancel product-image-cancel" data-no="{{ $key }}">x</div>
                                    <div class="image-zone"><img id="pro-img-{{ $key }}"
                                            src="{{ asset('assets/images/'.$productImage->image) }}">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mô tả <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea class="ckeditor" name="desciption"
                                id="description">{{ $tattoisInformation->content }}</textarea>

                        </div>
                    </div> -->


                    <!-- <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">
                          Username
                          <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="username" required="required" class="form-control col-md-7 col-xs-12" />
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Mật khẩu</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" class="form-control" value="passwordonetwo" />
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Giới tính</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="radio radio-inline">
                              <label>
                                  <input type="radio" name="radio" checked="checked" />
                                  <i class="helper"></i>Nam
                              </label>
                          </div>
                          <div class="radio radio-inline">
                              <label>
                                  <input type="radio" name="radio" />
                                  <i class="helper"></i>Nữ
                              </label>
                          </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="birthday">
                          Ngày sinh
                          <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="birthday" required="required" class="form-control col-md-7 col-xs-12" />
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="province">Tỉnh <span class="required">*</span> </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                              <option>Tùy chọn</option>
                              <option>Long an</option>
                              <option>Tiền giang</option>
                              <option>Bến tre</option>
                              <option>Phú yên</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="avatar">Avatar <span class="required">*</span> </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="avatar" required="required" class="form-control col-md-7 col-xs-12" />
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Mô tả <span class="required">*</span> </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="ckeditor" name="desciption" id="description"></textarea>
                          
                      </div>
                  </div> -->
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button class="btn btn-danger" type="button">Quay về</button>
                            <button type="submit" class="btn btn-success">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection