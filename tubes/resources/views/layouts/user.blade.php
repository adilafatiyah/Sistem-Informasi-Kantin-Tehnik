<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Kantin Tehnik</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicon -->
  <link href="{{asset('user/img/favicon.ico')}}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('user/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('user/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('user/css/style.css')}}" rel="stylesheet">


</head>

<body>
  <!-- Page Content
    ================================================== -->
  <!-- Hero -->

  <section class="hero">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          <a class="hero-brand" href="/" title="Home"><img alt="Bell Logo" src="{{asset('user/img/logo.png')}}"></a>
        </div>
      </div>

      <div class="col-md-12">
        <h1>
           Bell Kantin Tehnik
          </h1>

        <p class="tagline">
          Manajemen Pengelolaan Pembelian / Point Of Sale Kantin Tehnik Telkom
        </p>
      </div>
    </div>

  </section>
  <!-- /Hero -->

  @yield('content')




  <!-- About -->


  <footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-xs-12 text-lg-left text-center">
            <p class="copyright-text">
              © BELL Theme
            </p>
            <div class="credits">
            </div>
          </div>

          <div class="col-lg-6 col-xs-12 text-lg-right text-center">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="/user/home">Home</a>
              </li>

              <li class="list-inline-item">
                <a href="#about">About Us</a>
              </li>

              <li class="list-inline-item">
                <a href="#features">Features</a>
              </li>

              <li class="list-inline-item">
                <a href="#portfolio">Portfolio</a>
              </li>

              <li class="list-inline-item">
                <a href="#team">Team</a>
              </li>

              <li class="list-inline-item">
                <a href="#contact">Contact</a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </footer>
  <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>


  <!-- Required JavaScript Libraries -->
  <script src="{{asset('user/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('user/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('user/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('user/lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('user/lib/tether/js/tether.min.js')}}"></script>
  <script src="{{asset('user/lib/stellar/stellar.min.js')}}"></script>
  <script src="{{asset('user/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('user/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('user/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('user/lib/easing/easing.js')}}"></script>
  <script src="{{asset('user/lib/stickyjs/sticky.js')}}"></script>
  <script src="{{asset('user/lib/parallax/parallax.js')}}"></script>
  <script src="{{asset('user/lib/lockfixed/lockfixed.min.js')}}"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="{{asset('user/js/custom.js')}}"></script>

  <script src="{{asset('user/contactform/contactform.js')}}"></script>

</body>
</html>
