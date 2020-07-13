<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="{{url('/')}}"><span>El sabor de </span>La Tía</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>

          @if (Auth::check())
            <li class="drop-down"><a href="#">EMPRESA</a>
              <ul>
                <li><a href="{{url('empleado')}}">EMPLEADO</a></li>
                <li><a href="{{url('usuario')}}">USUARIO</a></li>
              </ul>
            </li>          
          @endif
          @if (Auth::check())
            <li><a href="{{url('cliente')}}">CLIENTE</a></li>
          @endif
            <li><a href="{{url('almuerzo')}}">ALMUERZO</a></li>
            <li><a href="{{url('menu')}}">MENU</a></li>
          @if (Auth::check())
            <li class="drop-down"><a href="{{url('menu')}}">REPORTES</a>
              <ul>
                <li><a href="{{url('menu')}}">MENU</a></li>
                <li class="drop-down"><a href="#">Drop Down 2</a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
                <li><a href="#">Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#contact">Contact</a></li>
          @endif
          @if (Auth::check())
            <li class="drop-down"><a href="#">{{ session()->get('empleado') }}</a>
              <ul>
                <li><a href="{{url('auth/logout')}}">SALIR</a></li>
                <li><a href="{{url('usuario')}}">USUARIO</a></li>
              </ul>
            </li>
          @endif
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->