<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    function index(){
        $result = Pengaduan::table('pengaduan')
            ->join('masyarakat', 'pengaduan.nik', '=', 'masyarakat.nik')
            ->select('masyarakat.username', 'pengaduan.id_pengaduan', 'pengaduan.tgl_pengaduan', 'pengaduan.nik', 'pengaduan.isi_laporan', 'pengaduan.foto', 'pengaduan.status')
            ->get();
        return view('/admin/detailLaporanAdmin', [
            'results' => $result
        ]);
    }
}