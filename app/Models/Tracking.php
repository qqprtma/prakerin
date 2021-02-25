<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;

    protected $table = "trackings";
    protected $fillable = ['id', 'lokasi','positif', 'negatif', 'sembuh', 'meninggal', 'tanggal', 'rw_id'];
    public $timestamps = true;

    public function rw()
    {
        return $this->belongsTo('App\Models\Rw', 'rw_id');
    }

}
