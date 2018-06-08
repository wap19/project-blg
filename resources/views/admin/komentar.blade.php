@extends('admin.tampilan')

@section('judul', 'Catatan Saya')

@section('kontenadmin')

<br>
<br>
<div class="table-responsive">
    <table class="table table-bordered" width="100%">
        <thead>
            <tr>
                <th width="20%">Judul</th>
                <th>Isi</th>
                <th width="10%">Hapus</th>
            </tr>
        </thead>
        <tbody>
        @foreach($komentar as $catatan)
            <tr>
                <td>{{$catatan->nama}}</td>
                <td align="justify">
                    {{$catatan->komentar}}
                </td>
                <td align="center">
                    <form class="" action="/administrator/hapuskomen/{{ $catatan->id }}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="{{csrf_token() }}">
                        <input type="submit" name="name" class="btn btn-danger btn-sm" value="Hapus">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $komentar->links() !!}
</div>

@endsection