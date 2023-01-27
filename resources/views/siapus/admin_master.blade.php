<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>SEAL | SI APUS</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="{{asset('siapus/img/logosiapus.png') }}" rel="icon" />
  <link href="{{asset('siapus/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="{{asset('siapus/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
  <link href="{{asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet" />
  <link href="{{asset('siapus/vendor/aos/aos.css') }}" rel="stylesheet" />
  <link href="{{asset('siapus/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{asset('siapus/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
  <link href="{{asset('siapus/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
  <link href="{{asset('siapus/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
  <link href="{{asset('siapus/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">

  <!-- AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- Template Main CSS File -->
  <link href="{{asset('siapus/css/style.css') }}" rel="stylesheet" />
</head>

<body>
        @include('siapus.body.header')

        @yield('siapus')

        @include('siapus.body.footer')

{{-- Back To TOP --}}
    <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
{{-- END Back To TOP --}}

 <!-- JS AOS -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- Vendor JS Files -->
  <script src="{{asset('siapus/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{asset('siapus/vendor/aos/aos.js') }}"></script>
  <script src="{{asset('siapus/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset('siapus/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{asset('siapus/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{asset('siapus/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('siapus/js/main.js')  }}"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
</body>

</html>