<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Profil;

class ProfilController extends Controller{
    //
    public function index() {
        $profil = Profil::all();
        return view('admin/profil', compact('profil'));
    }
    // public function create() {
    // return view('blog.create');
    // }
    public function store(Request $request) {
        $blog = new Profil;
        $blog->tentang = $request->tentang;
        $blog->save();

        return redirect('administrator/profil');
    }

    public function profil() {
        $profil = Profil::all();
        return view('admin/profil', ['profils' => $profil]);
    }

    public function detail($id) {
        $catatans = Catatan::find($id);
        return view('admin/detail', ['detail' => $catatans]);
    }

    public function edit($id) {
        $blog = Profil::find($id);
        return view('admin/ubah', ['blog' => $blog]);
    }
    public function upd(Request $request, $id) {
        $blog = Profil::find($id);
        $blog->tentang = $request->tentang;
        $blog->save();
        
        return redirect('administrator/profil');
    }
    public function destroy($id) {
        $blog = Catatan::find($id);
        $blog->delete();
        return redirect('administrator/catatan');
    }

}
