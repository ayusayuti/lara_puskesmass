<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    protected $fillable = ['dokter_id','pasien_id','hasil_pemeriksaan'];
}
