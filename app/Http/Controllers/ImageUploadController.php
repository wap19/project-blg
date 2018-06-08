<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;

class ImageUploadController extends Controller
{
    //
    public function index() {
        $galeri = Galeri::orderBy('created_at', 'desc')->paginate(4);
        return view('admin/data-galeri', ['galeri' => $galeri]);
    }
    public function imageupload() {
        return view('admin/image');
    }
    public function uploadimage(Request $request) {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $gambar = $request->file('image');
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('img/galeri'), $imageName);
        $do = new Galeri($request->all());
        $do->gambar = $imageName;
        $do->save();
        
        return redirect('administrator/data-galeri')->with('success', 'You Have Been Successfully Upload Image')->with('image', $imageName);
    }
}
