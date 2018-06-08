@extends('admin.tampilan')

@section('judul', 'Detail Catatan')

@section('kontenadmin')

<div class="pull-right" style="margin-left:5px;">
    <form class="" action="/administrator/{{ $detail->id }}" method="post">
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="_token" value="{{csrf_token() }}">
        <input type="submit" name="name" class="btn btn-danger btn-sm" value="Hapus">
    </form>
</div>
<div class="pull-right">
    <a href="{{url('administrator/tambah')}}" class="btn btn-success btn-sm">Tambah Catatan</a>
    <a href="{{url('administrator/edit/'.$detail->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
</div>

<h3><strong>{{$detail->judul}}</strong></h3>
<br>
<p>{{$detail->catatan}}</p>
@endsection