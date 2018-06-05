<div class="col-md-8">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Komentar</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($data as $index =>$datas)
				  <tr>
				   <td>{{ $index+1 }}</td>
				     <td>{{ $datas->nama }}</td>
					 <td><a class="btn btn-success"  href="{{ url('edit_gaji',['id'=>$datas->id]) }}"/>Edit</a></td>
					 <td><a class="btn btn-info"  href="{{ url('hapus_gaji',['id'=>$datas->id]) }}"/>hapus</a></td>\
				  </tr>
				  @endforeach
          </tbody>
        </table>
        <nav aria-label="...">
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
      </nav>
      </div>