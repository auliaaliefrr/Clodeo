<?php

namespace App\Http\Controllers;

use App\Models\dataset;
use Illuminate\Http\Request;
use File;

class contoh extends Controller
{
    public function contohupload()
    {
        $gambar = dataset::get();
        return view('contoh', ['gambar' => $gambar]);
    }

    public function proses_upload(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|mimes:csv',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');

        $nama_file = $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);

        dataset::create([
            'file' => $nama_file,
        ]);

        return redirect()->back();
    }

    public function hapus($id)
    {
        // hapus file
        $gambar = dataset::where('id', $id)->first();
        File::delete('data_file/' . $gambar->file);

        // hapus data
        dataset::where('id', $id)->delete();

        return redirect()->back();
    }
}
