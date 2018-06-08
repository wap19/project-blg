@extends('admin.tampilan')

@section('judul', 'Ubah Catatan')

@section('kontenadmin')

    @if($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif

    @if(count($errors) > 0)
        @foreach($errors->all as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif

    {!! Form::open(array('route' => 'image.upload.post','files' => 'true')) !!}
    <div class="form-group">
        {!! Form::file('image', array('class' => 'form-control', 'required' => 'required')) !!}
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-primary">Upload Gambar</button>
    </div>
    {!! Form::close() !!}

@endsection