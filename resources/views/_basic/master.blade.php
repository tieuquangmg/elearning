<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Nam Viet Elearning</title>
    {{-- Layout --}}
    <link href="{{asset('build/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    {{--<link href="{{asset('build/bootstrap/css/bootstrap-theme.min.css')}}" rel="stylesheet">--}}
    <link href="{{asset('build/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('build/bootstrap-social/css/bootstrap-social.css')}}" rel="stylesheet">
    <link href="{{asset('build/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet">
    {{--Componets--}}
    {{--<link rel="stylesheet" href="{{asset('_vendor/components/breadcrumbs/breadcrumbs.css')}}">--}}
    {{--Style--}}
    <link href="{{asset('build/style/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('build/style/css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('build/style/css/order-ui.css')}}">
    <link rel="stylesheet" href="{{asset('build/style/css/style-admin.css')}}">
    <link rel="stylesheet" href="{{asset('build/style/css/fontello.css')}}">
    <style></style>

    @yield('head')
</head>
<body role="document">
<div class="loading"></div>
@include('_basic.module.nav')

<div id="main" class="container theme-showcase" role="main" style="padding-top: 70px; min-height: 768px">
    @include('_basic.includes.alert.index')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @yield('content')
</div>

@include('_basic.module.footer')
<script type="text/javascript" src="{{ asset('build/jquery/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('build/bootstrap/js/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('build/bootstrap-select/js/bootstrap-select.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('build/remarkable-bootstrap-notify/js/bootstrap-notify.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('build/bootstrap-validator/js/validator.min.js') }}"></script>/
<script type="text/javascript" src="{{ asset('tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('tinymce/tinymce_editor.js') }}"></script>

<script type="text/javascript">
    editor_config.selector = ".mceEditor";
    editor_config.path_absolute = "{{asset('')}}";
    editor_config.language = "{{ Session::get('locale') }}";
    editor_config.forced_root_block = 'div';
    editor_config.relative_urls = false;
    editor_config.remove_script_host = false;
    editor_config.convert_urls = true;
    tinymce.init(editor_config);
</script>
@yield('bot')

</body>
</html>
