<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('judul')</title>

    
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="administrator/dashboard" class="navbar-brand">Login</a>
            <button class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        
        <div class="collapse navbar-collapse" id="nav">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#profil">Profil</a></li>
                <li><a href="#catatan">Catatan</a></li>
                <li><a href="#galeri">Galeri</a></li>
            </ul>
        </div>
    </div>
  </nav>

  <div id="beranda" class="container-fluid" style="margin-top:50px;">
    <div class="row">
        <img src="{{url('img/bgwap.jpg')}}" alt="" class="img-responsive">
    </div>
  </div>

  @yield('konten')

  <footer>
      <div class="container">
        <span class="fa fa-facebook"></span>
        <span class="fa fa-twitter"></span>
        <span class="fa fa-instagram"></span>
        <div class="pull-right">
            &copy; 2018
        </div>
      </div>
  </footer>
    <script src="{{ url('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('js/lightbox.js') }}"></script>
    <script src="{{ url('css/admin/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/jquery-easing/jquery-easing.min.js') }}"></script>
    <script src="{{ url('js/sb-admin.min.js') }}"></script>
    <script>
        $('#nav a').click(function(e){
            e.preventDefault();
            var hash = this.hash;
            var position = $(hash).offset().top;
            $('html').animate({
                scrollTop : position
            },800)
        })
    </script>
  </body>
</html>