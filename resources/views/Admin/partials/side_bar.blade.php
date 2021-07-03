<!-- menu profile quick info -->
<div class="profile clearfix">
  <div class="profile_pic">
    <img src="{{ asset('theme_admin/img/img.jpg') }}" alt="..." class="img-circle profile_img">
  </div>
  <div class="profile_info">
    <span>Welcome,</span>
    <h2>Administrator</h2>
  </div>
</div>
<!-- /menu profile quick info -->
<br />
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>MANAGEMENT CONTROL</h3>
    <ul class="nav side-menu">
      <li><a href="{{ route('admin.article.index') }}"><i class="fa fa-newspaper-o"></i> Bài viết</a></li>
      <li><a href="{{ route('admin.info.index') }}"><i class="fa fa-newspaper-o"></i> Info IP</a></li>
    </ul>
  </div>
</div>
<!-- /sidebar menu -->