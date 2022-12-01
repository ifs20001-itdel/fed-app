<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://rekreartive.com/wp-content/uploads/2019/04/Logo-Tut-Wuri-Handayani-PNG-Warna.png">
    <title>SISTER</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("Layout/plugins/fontawesome-free/css/all.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset("Layout/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset("Layout/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset("Layout/plugins/jqvmap/jqvmap.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("Layout/dist/css/adminlte.min.css")}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset("Layout/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset("Layout/plugins/daterangepicker/daterangepicker.css")}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset("Layout/plugins/summernote/summernote-bs4.min.css")}}">

    <style>
        /* body {
            background-color: red;
        } */
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="https://www.del.ac.id/wp-content/uploads/2013/07/logo_institut-teknologi-del_1agustus2013.jpg" alt="AdminLTELogo" height="100" width="100">
        </div>

        <!-- Navbar -->
        @include('Layout.nav')
        <!-- /.navbar -->
        @include('Layout.sidebar')
        <!-- Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="container">
                        <h3> @yield('judul')</h3>
                        <div class="container">
                            @yield('content')
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{asset("Layout/plugins/jquery/jquery.min.js")}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset("Layout/plugins/jquery-ui/jquery-ui.min.js")}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset("Layout/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <!-- ChartJS -->
    <script src="{{asset("Layout/plugins/chart.js/Chart.min.js")}}"></script>
    <!-- Sparkline -->
    <script src="{{asset("Layout/plugins/sparklines/sparkline.js")}}"></script>
    <!-- JQVMap -->
    <script src="{{asset("Layout/plugins/jqvmap/jquery.vmap.min.js")}}"></script>
    <script src="{{asset("Layout/plugins/jqvmap/maps/jquery.vmap.usa.js")}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset("Layout/plugins/jquery-knob/jquery.knob.min.js")}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset("Layout/plugins/moment/moment.min.js")}}"></script>
    <script src="{{asset("Layout/plugins/daterangepicker/daterangepicker.js")}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset("Layout/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}"></script>
    <!-- Summernote -->
    <script src="{{asset("Layout/plugins/summernote/summernote-bs4.min.js")}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset("Layout/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset("Layout/dist/js/adminlte.js")}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset("Layout/dist/js/demo.js")}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset("Layout/dist/js/pages/dashboard.js")}}"></script>
</body>

</html>