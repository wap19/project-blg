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
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50" style="background:#f9f9f9;">
  
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="/" class="navbar-brand"><i class="fa fa-chevron-left"></i> Kembali</a>
        </div>
  </nav>

  <div class="container well well-small" style="margin-top:70px;">
    <div class="container">
    @foreach($catatan as $c)
        <div class="col-md-4" style="margin-bottom:50px;">
            <strong>{{$c->judul}}</strong>
            <hr>
            <p class="text-justify">
                {{$c->catatan}}
                <a href="/{{$c->id}}">Selengkapnya...</a>
            </p>
        </div>
    @endforeach
    </div>
    {!! $catatan->links() !!}
  </div>

  <script src="{{ url('js/jquery/jquery.min.js') }}"></script>
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
