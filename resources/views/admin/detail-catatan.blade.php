@extends('admin.tampilan')

@section('judul', 'Detail Catatan')

@section('kontenadmin')

<div class="pull-right">
    <a href="{{url('administrator/tambah-catatan')}}" class="btn btn-success btn-sm">Tambah Catatan</a>
</div>

<h3><strong>{{$detail->judul}}</strong></h3>
<br>
<p>{{$detail->catatan}}</p>
@endsection