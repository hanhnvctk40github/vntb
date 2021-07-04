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
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{route('admin.category.edit.post')}}">
                @csrf
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tên danh mục <span class="required">*</span> </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="name" required="required" class="form-control col-md-7 col-xs-12" value="{{$category->name}}"/>
                    </div>
                    <input type="hidden" name="id" value="{{$category->id}}"/>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Lưu</button>
                    </div>
                </div>
              </form>
          </div>
      </div>
  </div>
</div>

@endsection