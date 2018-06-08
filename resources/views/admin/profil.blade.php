@extends('admin.tampilan')

@section('kontenadmin')

@if(count($profil) == 0)
@section('judul', 'Tambahkan Tentang Saya')
<form action="/administrator/proses" method="POST">
    <h2><strong>Tambahkan Tentang Saya</strong></h2>
    <div class="form-group">
        <textarea name="tentang" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <input type="hidden" name="_token" value="{{csrf_token() }}">
    <input type="submit" value="Tambahkan" class="btn btn-primary">
</form>
@else
@section('judul', 'Tentang Saya')

@foreach($profil as $t)
<div class="pull-right">
    <a href="/administrator/profil/{{$t->id}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
</div>
<h2><strong>Tentang Saya</strong></h2>
<hr>
{{$t->tentang}}
@endforeach
@endif

@endsection