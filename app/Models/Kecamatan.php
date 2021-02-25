<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    public $fillable = ['kode_kecamatan','nama_kecamatan','kota_id'];
    public $timestamps = true;

    public function Kota()
    {
        return $this->belongsTo('App\Models\kota','kota_id');
    }
    public function Kecamatan()
    {
        return $this->hasMany('App\Models\Kelurahan','kelurahan_id');
    }

}
