@extends('admin.tampilan')

@section('judul', 'Tambah Catatan')

@section('kontenadmin')
<form class="" action="/administrator" method="post">
    <div class="form-group">
        <label for=""><strong>Judul Catatan</strong></label>
        <input type="text" name="judul" class="form-control"/>
    </div>
    <div class="form-group">
        <label for=""><strong>Catatan</strong></label>
        <textarea name="catatan" rows="8" cols="40" class="form-control"></textarea>
    </div>
    <input type="hidden" name="_token" value="{{csrf_token() }}">
    <input type="submit" name="name" value="Buat Catatan" class="btn btn-primary">
</form>
@endsection