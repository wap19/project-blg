<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($message = Session::get('success'))
        <div>{{ $message }}</div>
    @endif

    @if(count($errors) > 0)
        @foreach($errors->all as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif

    {!! Form::open(array('route' => 'image.upload.post','files' => 'true')) !!}
    {!! Form::file('image', array('class' => 'ah')) !!}
    <button type="submit">Upload</button>
    {!! Form::close() !!}
</body>
</html>