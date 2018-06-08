<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('judul')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
    <br><br>
    <div class="text-center"><h1>Komentar</h1></div>
    <hr>

    <div class="col-md-4"></div>

    <div class="col-md-4">
      <form method="post" action="{{url('komentar')}}">
      {{ csrf_field() }}
        <div class="row">
          <div class="form-group col-md-12">
            <label for="Komentar">Nama</label>
            <input type="text" name="nama" class="form-control" required>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="Komentar">Komentar</label>
            <textarea name="komentar" class="form-control" name="name" required></textarea>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{url('tampil')}}" type="submit" class="btn btn-success">Lihat Komentar</a>
          </div>
        </div>
      </form>
      </div>

      <div class="col-md-4"></div>

    </div>
    <hr>
  </body>
</html>
