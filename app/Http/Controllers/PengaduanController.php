<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use Illuminate\Support\Facades\DB;
use App\Models\Pengaduan;


class PengaduanController extends Controller
{
    function index(){

    $data = Pengaduan::all();
 

    return view('dashboard', ['data' => $data]);
   }

  function tampil_isi_pengaduan(){

    return view('isi-pengaduan');
  }

  function proses_tambah_pengaduan(Request $request){

    $validated = $request->validate([
      'isi_laporan' => 'required|string',
      'foto' => 'required',
    ]);

    $nama = "";

    if ($request->hasFile('foto')) {
        $nama = time() . $request->foto->getClientOriginalName();
        $request->foto->move('img', $nama);
    }

    DB::table('pengaduan')->insert([
      'tgl_pengaduan' => date('y-m-d'),
      'nik' => '18236',
      'isi_laporan' => $request->isi_laporan,
      'foto' => $nama,
      'status' => 'proses'
    ]);

    return redirect('/dashboard');
  }

  function detail($id_pengaduan){
    $data = DB::table('pengaduan')->where('id_pengaduan', $id_pengaduan)->first();
    return view('/detail',[
      "data" => $data
    ]); 
  }
  
  function hapus($id_pengaduan){
    DB::table('pengaduan')->where('id_pengaduan', $id_pengaduan)->delete();
    return redirect('/dashboard');
  }

  function tampil_update($id_pengaduan)
  {
    $title = "Update Data";
    $data = DB::table('pengaduan')->where('id_pengaduan', $id_pengaduan)->first();

    return view('/update', [
      "data" => $data,
      "title" => $title
    ]);
  }

  function update($id_pengaduan, Request $request){
    $isi_laporan = $request->isi_laporan;

    $nama = "";
    if ($request->hasFile('foto')) {
        $nama = time() . $request->foto->getClientOriginalName();
        $request->foto->move('img', $nama);
    }
    
    DB::table('pengaduan')->where('id_pengaduan', $id_pengaduan)->update([
        'isi_laporan' => $isi_laporan,
        'foto' => $nama
    ]);
    
    return redirect('/dashboard');
} 
  
}