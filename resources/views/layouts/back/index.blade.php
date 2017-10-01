<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Esports Coach</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('dist/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('dist/css/font-awesome.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ URL::asset('dist/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('dist/css/ionicons.css') }}">
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css"> -->
  <link rel="stylesheet" href="{{ URL::asset('dist/css/AdminLTE.min.css') }}">
  <!-- Material Design -->
  <!-- <link rel="stylesheet" href="../../dist/css/bootstrap-material-design.min.css"> -->
  <link rel="stylesheet" href="{{ URL::asset('dist/css/bootstrap-material-design.min.css') }}">
  <!-- <link rel="stylesheet" href="../../dist/css/ripples.min.css"> -->
  <link rel="stylesheet" href="{{ URL::asset('dist/css/ripples.min.css') }}">
  <!-- <link rel="stylesheet" href="../../dist/css/MaterialAdminLTE.min.css"> -->
  <link rel="stylesheet" href="{{ URL::asset('dist/css/MaterialAdminLTE.min.css') }}">
  <!-- MaterialAdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <!-- <link rel="stylesheet" href="../../dist/css/skins/all-md-skins.min.css"> -->
  <link rel="stylesheet" href="{{ URL::asset('dist/css/skins/all-md-skins.min.css') }}">
    <script src="{{ URL::asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/fullcalendar.css') }}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->
  @yield('css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

 @include('layouts.back.header')

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  @include('layouts.back.sidebar')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  @include('layouts.back.footer')

  <!-- Control Sidebar -->
 {{--@include('layouts.back.controlsidebar')--}}
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{ URL::asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- <script src="../../"></script> -->
<!-- Bootstrap 3.3.6 -->
<script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
<!-- <script src="../../"></script> -->
<!-- Material Design -->
<script src="{{ URL::asset('dist/js/material.min.js') }}"></script>
<script src="{{ URL::asset('dist/js/ripples.min.js') }}"></script>
<!-- <script src="../../"></script>
<script src="../../"></script> -->
<script>
    $.material.init();
</script>
<!-- SlimScroll -->
<script src="{{ URL::asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- <script src="../../"></script> -->
<!-- FastClick -->
<script src="{{ URL::asset('plugins/fastclick/fastclick.js') }}"></script>
<!-- <script src="../../"></script> -->
<!-- AdminLTE App -->
<script src="{{ URL::asset('dist/js/app.min.js') }}"></script>
<!-- <script src="../../"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('plugins/moment/min/moment.min.js') }}"></script>

<script src="{{ URL::asset('js/fullcalendar.min.js') }}"></script>

<script src="{{ URL::asset('dist/js/demo.js') }}"></script>
<!-- <script src="../../"></script> -->
<script>
//    $(document).ready(function () {
//
//        $('.sidebar-menu').tree();
//
//        var url = window.location;
//
//        // for sidebar menu entirely but not cover treeview
//        $('ul.sidebar-menu a').filter(function() {
//            return this.href == url;
//        }).parent().addClass('active');
//
//        // for treeview
//        $('ul.treeview-menu a').filter(function() {
//            return this.href == url;
//        }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
//
//
//    });

</script>
@yield('js')
</body>
</html>
