@extends('admin.tampilan')

@section('kontenadmin')

@section('judul', 'Ubah Tentang Saya')
<form action="/administrator/proses-ubah/{{ $blog->id }}" method="POST">
    <h2><strong>Ubah Tentang Saya</strong></h2>
    <div class="form-group">
        <textarea name="tentang" id="" cols="30" rows="10" class="form-control">{{$blog->tentang}}</textarea>
    </div>
    <input type="hidden" name="_method" value="put">
    <input type="hidden" name="_token" value="{{csrf_token() }}">
    <input type="submit" value="Ubah" class="btn btn-primary">
</form>

@endsection