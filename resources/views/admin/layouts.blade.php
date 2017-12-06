<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title> Admin Template</title>

  <!-- Bootstrap CSS -->

  <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->

  <link href="{{ asset('css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- full calendar css-->
  {{--  <link href="{{ asset('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
  <link href="{{ asset('assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
  <!-- easy pie chart-->  --}}
  <link href="{{ asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}" type="text/css">
  <link href="{{ asset('css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
  <!-- Custom styles -->
  {{--  <link rel="stylesheet" href="{{ asset('css/fullcalendar.css')}}">  --}}
  <link href="{{ asset('css/widgets.css')}}" rel="stylesheet">
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">
  <link href="{{ asset('css/style-responsive.css')}}" rel="stylesheet" />
  <link href="{{ asset('css/xcharts.min.css')}}" rel=" stylesheet">
  <link href="{{ asset('css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
  <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.min.css" rel="stylesheet">
  <link href="{{ asset('/css/paper.css') }}" rel="stylesheet">

  
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>
<body>
   <section id="container" class="">
       @include('admin.header.header');
       @include('admin.slider.slider');
        @yield('content');
   </section>

   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

  <script src="{{ asset('/js/moment.js') }}"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.min.js"></script>
  {{--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>  --}}
  <meta name="csrf-token" content="<?php echo csrf_token(); ?>">
  
<!-- javascripts -->
  <script src="{{ asset('js/jquery.js')}}"></script>
  <script src="{{ asset('js/jquery-ui-1.10.4.min.js')}}"></script>
  <script src="{{ asset('js/jquery-1.8.3.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <!-- bootstrap -->
  <script src="{{ asset('js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{ asset('js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{ asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{ asset('assets/jquery-knob/js/jquery.knob.js')}}"></script>
  <script src="{{ asset('js/jquery.sparkline.js')}}" type="text/javascript"></script>
  <script src="{{ asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
  <script src="{{ asset('js/owl.carousel.js')}}"></script>
  <!-- jQuery full calendar -->
  <<script src="{{ asset('js/fullcalendar.min.js')}}"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="{{ asset('assets/fullcalendar/fullcalendar/fullcalendar.js')}}"></script>
    <!--script for this page only-->
    <script src="{{ asset('js/calendar-custom.js')}}"></script>
    <script src="{{ asset('js/jquery.rateit.min.js')}}"></script>
    <!-- custom select -->
    <script src="{{ asset('js/jquery.customSelect.min.js')}}"></script>
    <script src="{{ asset('assets/chart-master/Chart.js')}}"></script>

    <!--custome script for all page-->
    <script src="{{ asset('js/scripts.js')}}"></script>
    <!-- custom script for this page-->
    <script src="{{ asset('js/sparkline-chart.js')}}"></script>
    <script src="{{ asset('js/easy-pie-chart.js')}}"></script>
    <script src="{{ asset('js/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{ asset('js/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{ asset('js/xcharts.min.js')}}"></script>
    <script src="{{ asset('js/jquery.autosize.min.js')}}"></script>
    <script src="{{ asset('js/jquery.placeholder.min.js')}}"></script>
    <script src="{{ asset('js/gdp-data.js')}}"></script>
    <script src="{{ asset('js/morris.min.js')}}"></script>
    <script src="{{ asset('js/sparklines.js')}}"></script>
    <script src="{{ asset('js/charts.js')}}"></script>
    <script src="{{ asset('js/jquery.slimscroll.min.js')}}"></script>

</body>
</html>