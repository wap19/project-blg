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
    </div>
  </nav>

  <div class="container well well-small" style="margin-top:70px;">
    <h2><strong>{{$catatan->judul}}</strong></h2>
    <hr>
    <p>
        {{$catatan->catatan}}
    </p>
    <hr>
    <div class="col-md-12"><i>Silahkan Berkomentar</i></div><br>
    <form action="/proses" method="post">
        <div class="form-group col-md-3">
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
        </div>
        <div class="form-group col-md-7">
            <input type="text" name="komentar" class="form-control" placeholder="Komentar">
        </div>
        <div class="form-group">
        <input type="hidden" name="catatan" value="{{$catatan->id}}">
            <input type="hidden" name="_token" value="{{csrf_token() }}">
            <input type="submit" name="isi" class="btn btn-primary col-md-2" id="" value="Kirim">
        </div>
    </form>
    <hr>
    <br>
    <br><br>
    <div class="row">
    @foreach($komentar as $komen)
    @if($komen->catatan == $catatan->id)
    <div class="col-md-3">
        <strong><i>{{$komen->nama}}</i></strong>
        <p class="text-justify">
            {{$komen->komentar}}
        </p>
    </div>
    @endif
    @endforeach
    </div>

    {!! $komentar->links() !!}
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
