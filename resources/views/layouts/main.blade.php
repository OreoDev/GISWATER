<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/AdminLTE.min.css') !!}
    {!! Html::style('css/font-awesome.min.css') !!}
    {!! Html::style('css/ionicons.min.css') !!}
    {!! Html::style('css/skins/_all-skins.min.css') !!}
</head>
<body class="hold-transition skin-blue">
<!-- Site wrapper -->
<div class="wrapper">
@include('includes.header')
@include('includes.sidebar')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('includes.footer')
</div>
<!-- ./wrapper -->
{!! Html::script('js/jquery.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/jquery.slimscroll.min.js') !!}
{!! Html::script('js/fastclick.js') !!}
{!! Html::script('js/app.min.js') !!}

</body>
</html>

