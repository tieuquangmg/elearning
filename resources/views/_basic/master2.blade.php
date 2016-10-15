<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Project Module</title>
    <link href="{{asset('build/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('build/bootstrap/css/bootstrap-theme.min.css')}}" rel="stylesheet">
    <link href="{{asset('build/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('build/bootstrap-social/css/bootstrap-social.css')}}" rel="stylesheet">
    <link href="{{asset('build/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('build/style/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('build/style/css/order-ui.css')}}">
    <link rel="stylesheet" href="{{asset('build/style/css/style-admin.css')}}">
    <style></style>
    @yield('head')
</head>
<body role="document" style="background: url(images/bg.jpg) center no-repeat">
<div class="loading"></div>
<div id="main" class="container theme-showcase" role="main" style="padding-top: 70px ">
    @include('_basic.includes.alert.index')
    @yield('content')
</div>

<script type="text/javascript" src="{{ asset('') }}build/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('') }}build/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('') }}build/bootstrap-select/js/bootstrap-select.js"></script>

<script type="text/javascript" src="{{ asset('') }}tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="{{ asset('') }}tinymce/tinymce_editor.js"></script>
<script type="text/javascript">
    editor_config.selector = ".mceEditor";
    editor_config.path_absolute = "{{ asset('') }}";
    editor_config.language= "{{ Session::get('locale') }}";
    editor_config.forced_root_block = 'div';
    tinymce.init(editor_config);
</script>
@yield('bot')
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</body>
</html>
