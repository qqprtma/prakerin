<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_rw', 'kode_rw', 'kelurahan_id'];
    public $timestamps = true;

    public function kelurahan()
    {
        return $this->belongsTo('App\Models\Kelurahan', 'kelurahan_id');
    }

    public function tracking()
    {
        return $this->hasMany('App\Models\tracking', 'id_tracking');
    }
}
