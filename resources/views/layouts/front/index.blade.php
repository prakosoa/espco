<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Esports Coach</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />

    <link rel="stylesheet" href="{{ URL::asset('sedna/css/normalize.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('sedna/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('sedna/css/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('sedna/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('sedna/css/styles.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('sedna/css/queries.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('sedna/css/etline-font.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('sedna/bower_components/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="{{ URL::asset('sedna/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    <!-- jQuery 2.2.3 -->
    <script src="{{ URL::asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    {{--<script src="{{ URL::asset('js/fullcalendar.js') }}"></script>--}}
    <!-- FullCalendar -->
    <link rel="stylesheet" href="{{ URL::asset('css/fullcalendar.css') }}">
{{--    <link rel="stylesheet" href="{{ URL::asset('plugins/fullcalendar/fullcalendar.print.css') }}">--}}
    <!-- Custom styling plus plugins -->

</head>
<body id="top">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    @yield('header')

    @yield('content')
    
    @include('layouts.front.footer')


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="{{ URL::asset('sedna/bower_components/retina.js/dist/retina.js') }}"></script>
    <script src="{{ URL::asset('sedna/js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ URL::asset('sedna/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('sedna/js/jquery.flexslider-min.js') }}"></script>
    <script src="{{ URL::asset('sedna/js/scripts.js') }}"></script>
    <script src="{{ URL::asset('sedna/bower_components/classie/classie.js') }}"></script>
    <script src="{{ URL::asset('sedna/bower_components/jquery-waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <!-- FullCalendar -->
    <script src="{{ URL::asset('plugins/moment/min/moment.min.js') }}"></script>
    <script src="{{ URL::asset('js/fullcalendar.min.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ URL::asset('js/custom.min.js') }}"></script>


    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
</body>
</html>
