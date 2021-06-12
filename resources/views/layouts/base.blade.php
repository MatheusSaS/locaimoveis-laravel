<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Loca Moveis</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/portfolio/logo-img.png') }}" rel="icon">
  <link href="{{ asset('assets/img/portfolio/logo-img.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  @livewireStyles
  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

    <a href="/"><img src="{{ asset('assets/img/portfolio/logo-img.png') }}" class="img-fluid" style="height: 70px;width: 70px;" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto o" href="#imoveis">Imóveis</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contato</a></li>

          @if(Route::has('login'))
            @auth
              @if(Auth::user()->utype === 'ADM')        
              <li class="dropdown"><a href="#"><i class="fas fa-user"></i><span class="ml-5">{{Auth::user()->name}}</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="/meus_imoveis">Meus Imoveis</a></li>
                  <li><a href="{{route('admin.dashboard')}}">Painel Administrativo</a></li>
                  <li><a href="/admin/tipo">Tipos de imoveis</a></li>
                  <li><a href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                  <form id="logout-form" method="POST" action="{{ route('logout') }}">   
                    @csrf                                   
                  </form>
                </ul>
              </li>
              @else
              <li class="dropdown"><a href="#"><i class="fas fa-user"></i><span class="ml-5">{{Auth::user()->name}}</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="/meus_imoveis">Meus Imoveis</a></li>
                  <li><a href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                  <form id="logout-form" method="POST" action="{{ route('logout') }}">   
                    @csrf                                   
                  </form>
                </ul>
              </li>
              @endif
            @else
            <li class="dropdown"><a href="#"><i class="fas fa-user"></i><span class="ml-5">Usuario</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('register')}}">Registrar</a></li>
              </ul>
            </li>
            @endif
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('conteudo')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Loca Imoveis</h3>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#imoveis">Imoveis</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contato</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>MatheusSaS</span></strong>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @livewireScripts
  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="https://kit.fontawesome.com/a081f169c7.js" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  
</body>

</html>