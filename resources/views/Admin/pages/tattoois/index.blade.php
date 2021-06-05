@extends('Admin.master_admin')
@section('content')
<div class="page-header zvn-page-header clearfix">
  <div class="zvn-page-header-title">
      <h3>Danh sách Thợ xăm</h3>
  </div>
  <div class="zvn-add-new pull-right">
      <a href="{{ route('admin.tattoois.form') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Thêm mới</a>
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
                              <th class="column-title">Tên</th>
                              <th class="column-title">Avatar</th>
                              <th class="column-title">Ảnh tiểu sử</th>
                              <th class="column-title">Ảnh sản phẩm</th>
                              <th class="column-title">Nội dung tiểu sử</th>
                              <th class="column-title">Hành động</th>
                          </tr>
                      </thead>
                      <tbody>
                          @if ($listTattoisInformation)
                            @foreach ($listTattoisInformation as $key => $value)
                                @php
                                    $arrayProductImage = explode(",", $value->linkProductImage);
                                    $arrayImageEmployee = explode(",", $value->imageEmployee);
                                @endphp
                                <tr class="even pointer">
                                    <td>{{$key + 1}}</td>
                                    <td>{{$value->name}}</td>
                                    <td><img src="{{asset('assets/images/'.$value->linkAvatar)}}" alt="" width="100"></td>
                                    <td>
                                        @foreach ($value->employeeImages()->get() as $employeeImage)
                                            <span>
                                                <img src="{{asset('assets/images/employee/'.$employeeImage->image)}}" alt="" height="60">
                                                <div>{{$employeeImage->image}}</div>
                                            </span>
                                        @endforeach
                                        <!-- {{-- {{$value->linkProductImage}}  --}}
                                        @foreach ($arrayProductImage as $productImage)
                                            <span>
                                                <img src="{{asset('assets/images/employee/'.$productImage)}}" alt="" height="60">
                                                <div>{{$productImage}}</div>
                                            </span>
                                        @endforeach -->
                                    </td>
                                   
                                    <td>
                                        @foreach ($value->productImages()->get() as $productImage)
                                            <span>
                                                <img src="{{asset('assets/images/'.$productImage->image)}}" alt="" height="60">
                                                <div>{{$productImage->image}}</div>
                                            </span>
                                        @endforeach
                                        <!-- @foreach ($arrayImageEmployee as $productImage)
                                            <span>
                                                <img src="{{asset('assets/images/'.$productImage)}}" alt="" height="60">
                                                <div>{{$productImage}}</div>
                                            </span>
                                        @endforeach -->
                                    </td>

                                    <td><p style="width: 400px">{{$value->content}}</p></td>

                                    <td>
                                        <div class="zvn-box-btn-filter">
                                            <a href="{{route('admin.tattoois.edit.get',['id' => $value->id])}}" type="button" class="btn btn-icon btn-success" data-toggle="tooltip" data-placement="top" data-original-title="Edit">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="/delete/1" type="button" class="btn btn-icon btn-danger btn-delete" data-toggle="tooltip" data-placement="top" data-original-title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            

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

@endsection