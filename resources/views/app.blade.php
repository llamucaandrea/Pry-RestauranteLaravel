<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>El Sabor de la Tia</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ URL::asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ URL::asset('assets/img/apple-touch-icon.png" rel="apple') }}-touch-icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/nivo-slider/css/nivo-slider.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">

  <!--incluido--> 
  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}"/>
  <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}"/>
  <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}"/>
  <link rel="stylesheet" href="{{ URL::asset('css/flaticon.css') }}"/>
  <link rel="stylesheet" href="{{ URL::asset('css/slicknav.min.css') }}"/>

  <!-- Main Stylesheets -->
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>

  <!-- =======================================================
  * Template Name: eBusiness - v2.0.0
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body data-spy="scroll" data-target="#navbar-example">


  @include('navbar')
  @yield('content')
  
  <!-- ======= Footer ======= -->
  <footer>
    <!--div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>El sabor de </span>La Tía</h2>
                </div>

                <p>Nos complace atenderle en nuestro local</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="https://www.facebook.com/ElSabordelaTiaAmbato/?ref=bookmarks"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer 
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +123 456 789</p>
                  <p><span>Email:</span> contact@example.com</p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer 
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="assets/img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div-->
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>Llamuca Andrea</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
            -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ URL::asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ URL::asset('assets/vendor/appear/jquery.appear.js') }}"></script>
  <script src="{{ URL::asset('assets/vendor/knob/jquery.knob.js') }}"></script>
  <script src="{{ URL::asset('assets/vendor/parallax/parallax.js') }}"></script>
  <script src="{{ URL::asset('assets/vendor/wow/wow.min.js') }}"></script>
  <script src="{{ URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ URL::asset('assets/vendor/nivo-slider/js/jquery.nivo.slider.js') }}"></script>
  <script src="{{ URL::asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ URL::asset('assets/vendor/venobox/venobox.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ URL::asset('assets/js/main.js') }}"></script>
  <!--propio!-->
  <script type="text/javascript" src="{{ URL::asset('js/ListTable.js') }}"></script>

  <!--icono-->
  <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

  <!--incluido-->
  <!--====== Javascripts & Jquery ======-->
  <script src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.slicknav.min.js') }}"></script>
  <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>
  <script src="{{ URL::asset('js/main.js') }}"></script>
  <script src = "https://code.iconify.design/1/1.0.4/iconify.min.js"> </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://momentjs.com/downloads/moment.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
  <!--propio-->
  <script type="text/javascript" src="{{ URL::asset('js/jspdf.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jspdf.plugin.autotable.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jsReport.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/combo.js') }}"></script> 
  <script type="text/javascript" src="{{ URL::asset('js/dropdown.js') }}"></script> 
  <script type="text/javascript" src="{{ URL::asset('js/validarCedula.js') }}"></script> 
  <script type="text/javascript" src="{{ URL::asset('js/solicitud.js') }}"></script> 
  <script type="text/javascript" src="{{ URL::asset('js/modal.js') }}"></script> 

</body>

</html>