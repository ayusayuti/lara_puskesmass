<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dokter;
use App\Pasien;
use App\Pemeriksaan;
use DB;
class PemeriksaanController extends Controller
{
    public function index()
    {
        $pemeriksaans = Pemeriksaan::All();
        $pemeriksaans = DB::table('pemeriksaans')
            ->join('dokters', 'dokters.id', '=', 'pemeriksaans.dokter_id')
            ->join('pasiens', 'pasiens.id', '=', 'pemeriksaans.pasien_id')
            ->get();
        $data = array(
            'title'         => 'index',
            'no'            => 1,
            'pemeriksaans'  => $pemeriksaans
        );
        return view('pemeriksaan.index',$data);
    }
    public function create()
    {
        // $orders = Order::All();
        $dokters   = Dokter::All();
        $pasiens   = Pasien::All();
        $data = array(
            'dokters'  => $dokters,
            'pasiens'  => $pasiens,
        );
        return view('pemeriksaan.create',$data);
    }
    public function store()
    {
     Pemeriksaan::create([
         'pasien_id'            => request('pasien_id'),
         'dokter_id'            => request('dokter_id'),
         'hasil_pemeriksaan'    => request('hasil_pemeriksaan'),
     ]);
     return redirect('/pemeriksaan');
    }
}
