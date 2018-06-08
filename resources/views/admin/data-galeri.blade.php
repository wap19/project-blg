@extends('admin.tampilan')

@section('judul', 'Catatan Saya')

@section('kontenadmin')
    <a href="{{url('administrator/galeri')}}" class="btn btn-success btn-sm">Tambah Galeri</a>
    <hr>
    <div class="row">
        @foreach($galeri as $g)
            <div class="col-md-2 text-center" style="float:left;margin:20px;overflow:hidden;">
                <img src="{{url('img/galeri/'.$g->gambar)}}" alt="" class="img-responsive" style="height:150px;width:150px;">
            </div>
        @endforeach
    </div>
        {!! $galeri->links() !!}
</div>

@endsection