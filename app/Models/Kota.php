<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;

    public $fillable = ['provinsi_id', 'kode_kota','nama_kota'];
    protected $table = 'kotas';
    public $timestamps = true;

    public function Provinsi()
    {
        return $this->belongsTo('App\Models\Provinsi','provinsi_id');
    }
    public function Kecamatan()
    {
        return $this->hasMany('App\Models\Kecamatan','kota_id');
    }

}
