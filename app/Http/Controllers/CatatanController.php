<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Catatan;
use App\Komentar;

class CatatanController extends Controller
{
    //
    public function index() {
        return view('admin/dashboard');
    }
    
    public function dashboard() {
        $komentar = Komentar::where('status', 'Baru')->count();
        $koment = Komentar::paginate(5);
        return view('admin/dashboard', ['komentar' => $komentar]);
    }
    public function komentar() {
        $komentar = Komentar::where('status', 'Baru')->paginate(5);
        return view('admin/komentar', ['komentar' => $komentar]);
    }
/**
* Store a newly created resource in storage.
*
* @param IlluminateHttpRequest $request
* @return IlluminateHttpResponse
*/
    public function store(Request $request) {
        $blog = new Catatan;
        $blog->judul = $request->judul;
        $blog->catatan = $request->catatan;
        $blog->save();
        
        return redirect('administrator/catatan');
    }

    public function catatan() {
        $blogs = Catatan::paginate(5);
        return view('admin/catatan', ['blogs' => $blogs]);
    }

    public function detail($id) {
        $catatans = Catatan::find($id);
        return view('admin/detail', ['detail' => $catatans]);
    }

    public function edit($id) {
        $blog = Catatan::find($id);
        return view('admin/edit', ['blog' => $blog]);
    }
    public function update(Request $request, $id) {
        $blog = Catatan::find($id);
        $blog->judul = $request->judul;
        $blog->catatan = $request->catatan;
        $blog->save();
        
        return redirect('administrator/catatan');
    }
    public function destroy($id) {
        $blog = Catatan::find($id);
        $blog->delete();
        return redirect('administrator/catatan');
    }

}
