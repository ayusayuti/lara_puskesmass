<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $fillable = ['nama_dokter','alamat_dokter','spesialis','no_tlp'];
}
