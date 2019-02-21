<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Web Kresna Edu">
  <meta name="author" content="Fredy Nur Apriyanto">
  <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

  <title>SMIT Cellebration</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/admin.min.css') }}" rel="stylesheet">

  <style>
    .bg-login-image {
      background: url({{ asset('images/logo.png') }});
      background-position: center;
      background-size: 75%;
      background-repeat: no-repeat;
    }

    .bg-gradient-primary{
      background-color: #15a384;
      background-image: -webkit-gradient(linear,left top,left bottom,color-stop(10%,#e08e0b),to(#224abe));
      background-image: linear-gradient(180deg,#15a384 10%,#15a384 100%);
      background-size: cover;
    }

    .form-group p{
      color: #ff0000;
      font-size: 12px;
      margin-left: 15px;
    }
  </style>

  @yield('css')

</head>

<body class="bg-gradient-primary">

  <div class="container">

    @yield('content')

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/admin.min.js') }}"></script>

  @yield('js')

</body>

</html>
