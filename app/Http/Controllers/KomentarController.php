<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;

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
		$a = rand(0,1000); //random angka dari 0 sampai 1000

		$komentar= new Comments;
		$komentar->nama=$request->get('nama');
		$komentar->comment=$request->get('komentar');
		$komentar->post_id=$a;
		// dd($komentar);
        $komentar->save();
        
        return redirect('tampil')->with('success', 'Komentar Berhasil Ditambah');
	}
	
	public function destroy($id) {
		// DB::delete('from comments where id = ?',[$id]);
		// echo "Record deleted successfully.<br/>";
		// echo '<a href = "/delete-records">Click Here</a> to go back.';
		$hapus = Comments::find($id);
		$hapus->delete();
		return redirect('tampil');
	 }
	// public function show() {
	// 	$data = DB::table('comments')
	// 		->select('*')
	// 		->get();
	// 		return view('show',compact('data'));
	// 	}
}
