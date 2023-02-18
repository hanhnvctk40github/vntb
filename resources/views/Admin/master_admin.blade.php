<!DOCTYPE html>
<html lang="en">
<head>
    @include('Admin.partials.head')
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
              @include('Admin.partials.side_bar')
            </div>
        </div>
        <!-- top navigation -->
        @include('Admin.partials.top_nav')
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
            @yield('content')
        </div>
        <!-- /page content -->
        <!-- footer -->
        @include('Admin.partials.footer')
        <!-- /footer -->
    </div>
</div>
@include('Admin.partials.scripts')
@yield('script')
</body>
</html>