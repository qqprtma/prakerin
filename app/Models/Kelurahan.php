<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_kelurahan','kecamatan_id', 'kode_kelurahan'];
    protected $table = 'kelurahans';
    public $timestamps = true;

    public function kecamatan()
    {
        return $this->belongsTo('App\Models\Kecamatan', 'kecamatan_id');
    }

    public function rw()
    {
        return $this->hasMany('App\Models\Rw', 'rw_id');
    }
}
