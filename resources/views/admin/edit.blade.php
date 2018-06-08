@extends('admin.tampilan')

@section('judul', 'Ubah Catatan')

@section('kontenadmin')
<form class="" action="/administrator/{{ $blog->id }}" method="post">
    <div class="form-group">
        <label for=""><strong>Judul Catatan</strong></label>
        <input type="text" name="judul" value="{{ $blog->judul }}" class="form-control">        
    </div>
    <div class="form-group">
        <label for=""><strong>Catatan</strong></label>
        <textarea name="catatan" rows="8" cols="40" class="form-control">{{ $blog->catatan }}</textarea>
    </div>
    <input type="hidden" name="_method" value="put">
    <input type="hidden" name="_token" value="{{csrf_token() }}">
    <input type="submit" name="name" value="Ubah Catatan" class="btn btn-primary">
</form>

@endsection