<!DOCTYPE html>
<html>
@include('admin/includes/head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('admin/includes/header')
    @include('admin/includes/sidebar')
    <div class="content-wrapper">
        @yield("content")
    </div>
    <div class="control-sidebar-bg"></div>
</div>
</body>
</html>
@include('admin/includes/scripts')

