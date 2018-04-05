<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pasien;
class PasienController extends Controller
{
    public function index(){
        $pasiens = Pasien::All();
        $data = array(
            'title'   => 'Data Pasien',
            'pasiens' => $pasiens,
            'no'      => 1
        );
        return view('pasien.index',$data);
    }
    public function create(){
        $data = array('title'   => 'Tambah Pasien');
        return view('pasien.create',$data);
    }
    public function store(){
        Pasien::create([
            'nama_pasien'      => request('nama_pasien'),
            'alamat_pasien'     => request('alamat_pasien'),
            'jenis_kelamin'   => request('jenis_kelamin'),
        ]);
        return redirect('/pasien');
    }
    public function edit(Pasien $pasien){
        $data = array(
            'title'         => 'edit data',
            'pasien'          => $pasien
        );
        return view('pasien.edit',$data);
    }
    public function update(Pasien $pasien)
    {   
        $pasien->update([
            'nama_pasien'      => request('nama_pasien'),
            'alamat_pasien'     => request('alamat_pasien'),
            'jenis_kelamin'   => request('jenis_kelamin')
        ]);
        // dd($customer);
        return redirect('/pasien');
    }
    public function destroy(Pasien $pasien){
        $pasien->delete();
        return redirect()->route('pasien.index');
    }
}
