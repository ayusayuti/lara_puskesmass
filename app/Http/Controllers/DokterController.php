<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dokter;

class DokterController extends Controller
{
    public function index(){
        $dokters = Dokter::All();
        $data = array(
            'title'   => 'Dokter',
            'dokters' => $dokters,
            'no'        => 1
        );
        return view('dokter.index',$data);
    }
    public function create(){
        $data = array('title'   => 'Tambah Dokter');
        return view('dokter.create',$data);
    }
    public function store(){
        Dokter::create([
            'nama_dokter'   => request('nama_dokter'),
            'alamat_dokter' => request('alamat_dokter'),
            'spesialis'     => request('spesialis'),
            'no_tlp'        => request('no_tlp'),
        ]);
        return redirect('/dokter');
    }
    public function edit(Dokter $dokter){
        // $post = Post::find($id);
        // $categories = category::All();
        $data = array(
                'title'         => 'edit data',
                'dokter'          => $dokter
        );
        return view('dokter.edit',$data);
    }
    public function update(Dokter $dokter)
    {   
        // $post = Post::find($id);
        $dokter->update([
            'nama_dokter'      => request('nama_dokter'),
            'alamat_dokter'     => request('alamat_dokter'),
            'jenis_kelamin'   => request('jenis_kelamin')
        ]);
        // dd($customer);
        return redirect('/dokter');
    }
    public function destroy(Dokter $dokter){
        $dokter->delete();
        return redirect()->route('dokter.index');
    }
}
