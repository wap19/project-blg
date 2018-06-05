<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Data Komentar</title>
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
    <div class="text-center"><h1>Data Komentar</h1></div>
    <hr>
    <div class="container">
    <div class="form-group">
      <a href="{{url('artikel')}}" class="btn btn-default">Tambah Artikel</a>
    </div>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered" width="100%">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Komentar</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($komen as $index =>$datas)
				  <tr>
				   <!-- <td>{{ $index+1 }}</td> -->
				   <td>{{ $datas->nama }}</td>
				   <td>{{ $datas->comment }}</td>
					 <td align="center">
           <form action="/hapus/{{$datas->id}}">
            {{ csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="Hapus" class="btn btn-danger" onclick="return confirm('Yakin Akan Menghapus Data ??')">
           </form>
            <!-- <a class="btn btn-danger btn-xs"  href="{{ url('hapus',['id'=>$datas->id]) }}"/>hapus</a>
            <a href="/hapus/{{ $datas->id}}">Hhh</a> -->
           </td>
				  </tr>
				  @endforeach

          </tbody>
        </table>
        <?php echo str_replace('/?', '?', $komen->render()); ?>


        <!-- <nav aria-label="...">
        <ul class="pagination">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav> -->


      </div>

    </div>
    <hr>
  </body>
</html>
