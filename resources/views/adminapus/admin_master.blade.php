<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{asset('adminapus/img/logosiapus.png')}}" rel="icon">
    <title>SI APUS - Admin</title>
    <link href="{{asset('adminapus/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('adminapus/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('adminapus/css/ruang-admin.css')}}" rel="stylesheet">
</head>

<body id="page-top">

    @include('adminapus.body.header')

    @yield('adminapus')

    @include('adminapus.body.footer')

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="{{asset('adminapus/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('adminapus/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('adminapus/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('adminapus/js/ruang-admin.min.js')}}"></script>
    <script src="{{asset('adminapus/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('adminapus/js/demo/chart-area-demo.js')}}"></script>
</body>

</html>