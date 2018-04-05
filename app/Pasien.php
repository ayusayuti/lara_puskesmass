<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $fillable = ['nama_pasien','alamat_pasien','jenis_kelamin'];
}
