<!DOCTYPE html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>El sabor de la Tía</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ URL::asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{ URL::asset('css/agency.min.css') }}" rel="stylesheet">

  <!--icono-->
  <span class="iconify" data-icon="fa:home"></span>
  <span class="iconify" data-icon="noto:bird"></span>

</head>

<body id="page-top">

  @include('navbar')
  @yield('content')
  
<!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Your Website 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ URL::asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Contact form JavaScript -->
  <script src="{{ URL::asset('js/jqBootstrapValidation.js') }}"></script>
  <script src="{{ URL::asset('js/contact_me.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ URL::asset('js/agency.min.js') }}"></script>

  <!--incluidos-->
  <script type="text/javascript" src="{{ URL::asset('js/ListTable.js') }}"></script>
  <!--icono-->
  <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

</body>

</html>
