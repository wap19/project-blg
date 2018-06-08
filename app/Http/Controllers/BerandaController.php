<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catatan;
use App\Komentar;
use App\Profil;
use App\Galeri;

class BerandaController extends Controller
{
    //
    public function index() {
        $profil = Profil::all();
        $catatan = Catatan::orderBy('created_at', 'DESC')->limit(3)->get();
        $galeri =  Galeri ::orderBy('created_at', 'DESC')->limit(6)->get();
        return view('beranda', ['catatans' => $catatan, 'profil' => $profil, 'galeri' => $galeri]);
    }
    public function detail($id) {
        $catatan = Catatan::find($id);
        $komentar = Komentar::where('catatan', $id)->orderBy('created_at', 'DESC')->paginate(4);
        return view('detail', ['catatan' => $catatan, 'komentar' => $komentar]);
    }
    public function catatan() {
        $catatan = Catatan::paginate(6);
        return view('catatan', ['catatan' => $catatan]);
    }
    public function galeri() {
        $galeri = Galeri::paginate(12);
        return view('galeri', ['galeri' => $galeri]);
    }
    public function store(Request $request) {
        $blog = new Komentar;
        $blog->nama = $request->nama;
        $blog->komentar = $request->komentar;
        $blog->save();
        
        return redirect('/catatan');
    }
}
