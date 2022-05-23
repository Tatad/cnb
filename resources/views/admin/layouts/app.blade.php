<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/data-tables/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/data-tables/css/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/data-tables/css/select.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/data-tables/css/data-tables.css')}}">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/sweetalert/sweetalert.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('/admin-assets/app-assets/vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/quill/katex.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('/admin-assets/app-assets/vendors/quill/monokai-sublime.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/quill/quill.snow.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/quill/quill.bubble.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('/admin-assets/app-assets/vendors/dropify/css/dropify.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('/admin-assets/app-assets/css/themes/vertical-modern-menu-template/materialize.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('/admin-assets/app-assets/css/themes/vertical-modern-menu-template/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/css/pages/cards-basic.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/css/pages/page-blog.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <!-- Custom -->

    <title>CNB</title>

    <link rel="icon" href="{{asset('/site/media/images/logo/headerLogo.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('/site/media/images/logo/headerLogo.png')}}" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/quill/katex.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/quill/monokai-sublime.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/quill/quill.snow.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/quill/quill.bubble.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/select2/select2-materialize.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/ckeditor/skins/moono-lisa/dialog.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/ckeditor/skins/moono-lisa/editor.css')}}">

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/vendors/hover-effects/media-hover-effects.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin-assets/app-assets/css/custom/custom.css')}}">
</head>
<body>
<div id="app">
    @include('admin.includes.header')
    @include('admin.includes.leftMenu')
    <div id="main">
        @yield('content')
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{ asset('/admin-assets/ckeditor/ckeditor.js') }}"></script>
<script src="{{asset('/admin-assets/app-assets/js/vendors.min.js')}}"></script>
<script src="{{asset('/admin-assets/app-assets/vendors/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('/admin-assets/app-assets/js/scripts/form-file-uploads.js')}}"></script>
<script src="{{asset('/admin-assets/app-assets/vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/admin-assets/app-assets/vendors/data-tables/js/dataTables.responsive.min.js')}}"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script src="{{asset('/admin-assets/app-assets/vendors/quill/katex.min.js')}}"></script>
<script src="{{asset('/admin-assets/app-assets/vendors/quill/highlight.min.js')}}"></script>
<script src="{{asset('/admin-assets/app-assets/vendors/quill/quill.min.js')}}"></script>
<script src="{{asset('/admin-assets/app-assets/vendors/select2/select2.full.min.js')}}"></script>
<script src="{{asset('/admin-assets/app-assets/vendors/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('/admin-assets/app-assets/js/plugins.js')}}"></script>
<script src="{{asset('/admin-assets/app-assets/js/scripts/extra-components-sweetalert.js')}}"></script>
<script src="{{asset('/admin-assets/app-assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('/admin-assets/app-assets/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
<script src="{{asset('/admin-assets/app-assets/vendors/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js"></script>
<script src="{{asset('/admin-assets/app-assets/js/custom/custom-script.js')}}"></script>
</body>
</html>
