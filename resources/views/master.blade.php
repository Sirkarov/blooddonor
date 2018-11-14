<!DOCTYPE html>
<html>
<head>
    <title>krvodaritel.mk</title>
    @include("includes.head")
</head>
<body>
<div class="main-wrap">
    @include("includes.header")
    <div class="main-container">
        @yield("content")
    </div>
    @include("includes/footer")
</div>
@include("includes/scripts")
</body>
</html>
