@extends('admin.tampilan')

@section('judul', 'Catatan Saya')

@section('kontenadmin')

<a href="{{url('administrator/tambah')}}" class="btn btn-success btn-sm">Tambah Catatan</a>
<br>
<br>
<div class="table-responsive">
    <table class="table table-bordered" width="100%">
        <thead>
            <tr>
                <th width="20%">Judul</th>
                <th>Isi</th>
                <th width="10%">Opsi</th>
                <th width="10%">Hapus</th>
            </tr>
        </thead>
        <tbody>
        @foreach($blogs as $catatan)
            <tr>
                <td>{{$catatan->judul}}</td>
                <td align="justify">
                    {{$catatan->catatan}}
                </td>
                <td align="center">
                    <a href="{{url('administrator/edit/'.$catatan->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="{{url('administrator/catatan/'.$catatan->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                </td>
                <td align="center">
                    <form class="" action="/administrator/{{ $catatan->id }}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="{{csrf_token() }}">
                        <input type="submit" name="name" class="btn btn-danger btn-sm" value="Hapus">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $blogs->links() !!}
</div>

@endsection