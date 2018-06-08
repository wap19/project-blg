@extends('layouts.tampilan')

@section('judul', 'Beranda')

@section('konten')
    <div id="profil" class="container konten-padding bodas">
        <h2 class="text-center"><strong>Profil Saya</strong></h2>
        <hr>
        <!-- <div class="col-sm-4 text-center">
            <img src="{{url('img/s1.png')}}" alt="" class="img-responsive">
        </div> -->
        <div class="col-sm-12">
            <div class="text-justify">
                @foreach($profil as $p)
                    {{$p->tentang}}
                @endforeach
            </div>
        </div>
    </div>

    <div id="catatan" class="catatan konten-padding" style="padding-top:40px;">
        <div class="container">
            <h2 class="text-center"><strong>Catatan Terbaru Saya</strong></h2>
            <hr>
            @foreach($catatans as $catatan)
            <div class="col-sm-4">
                <div class="text-justify">
                    <h4><strong>{{$catatan->judul}}</strong></h4>
                    <hr>
                    <p>
                        {{ str_limit($catatan->catatan, 200)}}
                        <br>
                        <a href="/{{$catatan->id}}">Selengkapnya...</a>
                    </p>
                </div>
            </div>
            @endforeach
            <div style="padding-top:200px">
                <hr>
                <div class="text-center">
                    <a href="/catatan" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <div id="galeri" class="container konten-padding">
        <div class="row">
            <h2 class="text-center"><strong>Galeri Saya</strong></h2>
            <hr>
            @foreach($galeri as $g)
            <div class="col-md-2">
                <a class="example-image-link" href="{{url('img/galeri/'.$g->gambar)}}" data-lightbox="example-set">
                    <img src="{{url('img/galeri/'.$g->gambar)}}" alt="" class="img-responsive kurng lewih" style="margin:20px;">
                </a>
            </div>                  
            @endforeach
        </div>
            <hr>
            <div class="text-center">
                <a href="/galeri" class="btn btn-primary">Selengkapnya</a>
            </div>
    </div>
@endsection