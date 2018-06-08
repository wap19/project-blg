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
  <body data-spy="scroll" data-target=".navbar" data-offset="50" style="background:#f9f9f9;">
  
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="/" class="navbar-brand"><i class="fa fa-chevron-left"></i> Kembali</a>
        </div>
  </nav>

  <div class="container well well-small" style="margin-top:70px;">
    <div class="row">
    @foreach($galeri as $g)
        <div class="col-md-2">
            <a class="example-image-link" href="{{url('img/galeri/'.$g->gambar)}}" data-lightbox="example-set">
                <img src="{{url('img/galeri/'.$g->gambar)}}" alt="" class="img-responsive kurng lewih">
            </a>
        </div>      
    @endforeach
    </div>
    {!! $galeri->links() !!}
  </div>

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
