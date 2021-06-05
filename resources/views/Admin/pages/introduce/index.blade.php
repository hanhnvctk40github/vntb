@extends('Admin.master_admin')
@section('content')
<div class="page-header zvn-page-header clearfix">
  <div class="zvn-page-header-title">
      <h3>Quản lý video giới thiệu</h3>
  </div>
  <div class="zvn-add-new pull-right">
      {{-- <a href="{{ route('admin.introduce.form') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Thêm mới</a> --}}
  </div>
</div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
          <div class="x_title">
              <h2>Bộ lọc</h2>
              <ul class="nav navbar-right panel_toolbox">
                  <li class="pull-right">
                      <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
              </ul>
              <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <div class="row">
                  <div class="col-md-7">
                      {{-- <a href="?filter_status=all" type="button" class="btn btn-primary"> All <span class="badge bg-white">4</span> </a>
                      <a href="?filter_status=active" type="button" class="btn btn-success"> Active <span class="badge bg-white">2</span> </a>
                      <a href="?filter_status=inactive" type="button" class="btn btn-success"> Inactive <span class="badge bg-white">2</span> </a> --}}
                  </div>
                  <div class="col-md-5">
                      <div class="input-group">
                          {{-- <div class="input-group-btn">
                              <button type="button" class="btn btn-default dropdown-toggle btn-active-field" data-toggle="dropdown" aria-expanded="false">Search by All <span class="caret"></span></button>
                              <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                  <li><a href="#" class="select-field" data-field="all">Search by All</a></li>
                                  <li><a href="#" class="select-field" data-field="id">Search by ID</a></li>
                                  <li><a href="#" class="select-field" data-field="username">Search by Username</a></li>
                                  <li><a href="#" class="select-field" data-field="fullname">Search by Fullname</a></li>
                                  <li><a href="#" class="select-field" data-field="email">Search by Email</a></li>
                              </ul>
                          </div> --}}
                          <input type="text" class="form-control" name="search_value" value="" />
                          <span class="input-group-btn">
                              {{-- <button id="btn-clear" type="button" class="btn btn-success" style="margin-right: 0px;">Xóa tìm kiếm</button> --}}
                              <button id="btn-search" type="button" class="btn btn-primary">Tìm kiếm</button>
                          </span>
                          <input type="hidden" name="search_field" value="all" />
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!--box-lists-->
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
          <div class="x_title">
              <h2>Danh sách</h2>
              <ul class="nav navbar-right panel_toolbox">
                  <li class="pull-right">
                      <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
              </ul>
              <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <div class="table-responsive">
                  <table class="table table-striped jambo_table bulk_action">
                      <thead>
                          <tr class="headings">
                              <th class="column-title">#</th>
                              <th class="column-title">Tên video</th>
                              <th class="column-title">Video</th>
                              <th class="column-title">Hành động</th>
                          </tr>
                      </thead>
                      <tbody>
                          @if ($videosIntroduce)
                            <tr class="even pointer">
                              <td>1</td>
                              <td>{{$videosIntroduce->links}}</td>
                              <td>
                                <video class="video-show" style="width: 400px" controls autoplay loop>
                                      <source src="{{asset('assets/videos/'.$videosIntroduce->links)}}" type="video/mp4">
                                </video>
                                </td>
                              <td>
                                  <div class="zvn-box-btn-filter">
                                      {{-- <a href="/form/1" type="button" class="btn btn-icon btn-success" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                          <i class="fa fa-pencil"></i>
                                      </a>
                                      <a href="/delete/1" type="button" class="btn btn-icon btn-danger btn-delete" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
                                          <i class="fa fa-trash"></i>
                                      </a> --}}
                                      <a href="{{ route('admin.introduce.form') }}" class="btn btn-success"><i class="fa fa-pencil"></i> Chỉnh sửa</a>
                                  </div>
                              </td>
                            </tr>
                          @else
                          <tr class="even pointer">
                            <td colspan="7">No data</td>
                          </tr>
                          @endif
                          
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
<!--end-box-lists-->
<!--box-pagination-->
{{-- <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
          <div class="x_title">
              <h2>Phân trang</h2>
              <ul class="nav navbar-right panel_toolbox">
                  <li class="pull-right">
                      <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
              </ul>
              <div class="clearfix"></div>
          </div>

          <div class="x_content">
              <div class="row">
                  <div class="col-md-6">
                      <p class="m-b-0">Số phần tử trên trang: <b>2</b> trên <span class="label label-success label-pagination">3 trang</span></p>
                      <p class="m-b-0">Hiển thị<b> 1 </b> đến<b> 2</b> trên<b> 6</b> Phần tử</p>
                  </div>
                  <div class="col-md-6">
                      <nav aria-label="Page navigation example">
                          <ul class="pagination zvn-pagination">
                              <li class="page-item disabled">
                                  <a class="page-link" href="#" tabindex="-1">«</a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item active"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                  <a class="page-link" href="#">»</a>
                              </li>
                          </ul>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div> --}}
<!--end-box-pagination-->

@endsection