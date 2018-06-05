@extends('layouts.create')
@section('content')
<!-- Blog Entries Column -->
<div class="col-md-12 col-sm-12 col-xs-12" style="text-align: left;">
  <h1>News
  </h1>
  <!-- Blog Post -->
  @foreach($post as $data)
  <div class="card mb-4">
    <div class="card-body">
      <h2 class="card-title"><a href="{{ url('post/'.$data->id)}}">{{$data->title}}</a></h2>
      <img src="{{ URL::asset('images/'.$data->image)}}" alt="No Gambar">
      <p class="card-text">{{str_limit($data->desc, $limit = 500, $end = '...')}}</p>
      <a href="{{ url('/'.$data->id)}}" class="btn btn-primary">Read More &rarr;</a>
    </div>
    <div class="card-footer text-muted">
     {{$data->created_at}}
     <a href="#">Admin</a>
   </div>
 </div>
 @endforeach

 <!-- Pagination -->
 <ul class="pagination justify-content-center mb-4">
  <li class="page-item">
    <a class="page-link" href="#">&larr; Older</a>
  </li>
  <li class="page-item disabled">
    <a class="page-link" href="#">Newer &rarr;</a>
  </li>
</ul>

</div>
@stop

