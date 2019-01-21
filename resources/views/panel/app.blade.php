<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Pirat Hotel
    </title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="apple-touch-icon" href="/dash/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/dash/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
          rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    icon
    <link rel="stylesheet" type="text/css" href="/dash/app-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="/dash/app-assets/css/app.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="/dash/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="/dash/app-assets/css/core/colors/palette-gradient.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/dash/app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="/dash/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="/dash/app-assets/css/plugins/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="/dash/app-assets/css/plugins/loaders/loaders.min.css">
    <link rel="stylesheet" type="text/css" href="/dash/datatables.min.css"/>



    <link rel="stylesheet" href="/css/mystil.css">
    <!-- END Page Level CSS

    <link rel="stylesheet" type="text/css" href="/dash/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="/dash/app-assets/vendors/css/charts/morris.css">
    -->
    <!-- BEGIN Custom CSS-->

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="/dash/assets/css/style.css">
    <link rel="icon" href="/resimler/pirat.png" type="image/x-icon" />
    <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
<!-- fixed-top-->

<!-- ////////////////////////////////////////////////////////////////////////////-->


 <div id="app"></div>


<script src="{{mix('js/app.js')}}"></script>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Tüm Yazlım hakları bizimdir &copy; 2019 <a class="text-bold-800 grey darken-2" href="http://svsyazilim.com"
                                                                                                       target="_blank">SVSYazılım </a></span>
        <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">El yapımı :) & Made with <i class="ft-heart pink"></i></span>
    </p>
</footer>

<script src="/dash/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/dash/datatables.min.js"></script>
<!-- BEGIN VENDOR JS


-->
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS
<script src="/dash/app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
<script src="/dash/app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
<script src="/dash/app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
<script src="/dash/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js"
        type="text/javascript"></script>
<script src="/dash/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js"
        type="text/javascript"></script>

<!-- END PAGE VENDOR JS-->

<script>
    $(function () {
        $(".dda").click(function () {
            $('.menu-content').not( $(this).next('.menu-content')).hide();
            $(this).next('.menu-content').toggle();
        });
    });

</script>
 <script>
        $(document).ready( function () {
            $('#dTable').DataTable();
        } );

    </script>






<script src="/dash/app-assets/data/jvector/visitor-data.js" type="text/javascript"></script>
<!-- BEGIN MODERN JS-->
<script src="/dash/app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="/dash/app-assets/js/core/app.js" type="text/javascript"></script>
<script src="/dash/app-assets/js/scripts/customizer.js" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="/dash/app-assets/js/scripts/pages/dashboard-sales.js" type="text/javascript"></script>
<script type="text/javascript" src="/dash/datatables.min.js"></script>
<script type="text/javascript" src="/dash/main.js"></script>
<!-- END PAGE LEVEL JS-->
</body>
</html>
