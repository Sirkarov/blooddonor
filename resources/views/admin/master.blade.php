<!DOCTYPE html>
<html>
@include('admin/includes/head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('admin/includes/header')
<!-- Left side column. contains the logo and sidebar -->
    @include('admin/includes/sidebar')
    <div class="content-wrapper">
        @yield("content")
    </div>

@include('admin/includes/footer')
<!-- Control Sidebar -->
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
</body>
</html>
@include('admin/includes/scripts')

