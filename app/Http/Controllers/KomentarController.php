<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$komen = \App\Comments::paginate(1);
        return view('index',compact('komen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layout/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$id = $request->catatan;

		$komentar= new Komentar;
		$komentar->nama=$request->get('nama');
		$komentar->komentar=$request->get('komentar');
		$komentar->catatan=$id;
		// dd($komentar);
        $komentar->save();
        
        return redirect('/'.$id)->with('success', 'Komentar Berhasil Ditambah');
	}
	
	public function destroy($id) {
		// DB::delete('from comments where id = ?',[$id]);
		// echo "Record deleted successfully.<br/>";
		// echo '<a href = "/delete-records">Click Here</a> to go back.';
		$hapus = Komentar::find($id);
		$hapus->delete();
		return redirect('administrator/komentar');
	 }
	// public function show() {
	// 	$data = DB::table('comments')
	// 		->select('*')
	// 		->get();
	// 		return view('show',compact('data'));
	// 	}
}
