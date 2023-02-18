@extends('Admin.master_admin')
@section('content')
    <div class="page-header zvn-page-header clearfix">
        <div class="zvn-page-header-title">
            <h3>Danh sách bài viết</h3>
        </div>
        <div class="zvn-add-new pull-right">
            <a href="{{ route('admin.article.add.get') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Thêm
                mới</a>
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
                                    <th class="column-title">Ảnh chính bài viết</th>
                                    <th class="column-title">Danh mục</th>
                                    <th class="column-title">Tiêu đề</th>
                                    <th class="column-title">Mô tả bài viết</th>
                                    <th class="column-title">Ẩn bài viết</th>
                                    <th class="column-title">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($articles)
                                    @foreach ($articles as $article)
                                        <tr class="even pointer">
                                            <td>{{ $article->id }}</td>
                                            <td>
                                                <img src="{{ asset('assets/upload/article/' . $article->background_image) }}"
                                                    alt="" width="100">
                                            </td>
                                            @foreach ($categories as $category)
                                                @if ($article->id_category == $category->id)
                                                    <td>{{ $category->name }}</td>
                                                @endif
                                            @endforeach
                                            <td>{{ $article->title }}</td>
                                            <td>
                                                <p style="width: 400px">{{ $article->description }}</p>
                                            </td>
                                            <td>
                                                <input type="checkbox" {{ $article->is_display ? '' : 'checked' }}
                                                    data-hide-post data-id="{{ $article->id }}" />
                                            </td>
                                            <td>
                                                <div class="zvn-box-btn-filter">
                                                    <a href="{{ route('admin.article.edit.get', ['id' => $article->id]) }}"
                                                        type="button" class="btn btn-icon btn-success"
                                                        data-toggle="tooltip" data-placement="top"
                                                        data-original-title="Sửa">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('admin.article.delete', ['id' => $article->id]) }}"
                                                        type="button" class="btn btn-icon btn-danger btn-delete"
                                                        data-toggle="tooltip" data-placement="top"
                                                        data-original-title="Xóa">
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
@section('script')
    <script>
        $("input[data-hide-post]").change(function() {
            $.ajax({
                url: "{{ route('admin.article.hide-post') }}",
                type: 'POST',
                data: {
                    id: this.dataset.id,
                    _token: "{{ csrf_token() }}"
                }
            }).done(function(res) {
                if(res.success) {
                    alert('Thành công')
                }
            });

        });
    </script>
@endsection
