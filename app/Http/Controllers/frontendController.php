<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Models\Provinsi;
use App\Http\Models\Kota;
use App\Http\Models\Kecamatan;
use App\Http\Models\Kelurahan;
use App\Http\Models\RW;
use App\Http\Models\Tracking;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index()
    {

    //count up
    $positif = DB::table('trackings')
        ->sum('positif');
    $sembuh = DB::table('trackings')
        ->sum('sembuh');
    $meninggal = DB::table('trackings')
        ->sum('meninggal');

    $global = file_get_contents('https://api.kawalcorona.com/positif');
    $posglobal = json_decode($global, TRUE);

    // Date
    $tanggal = Carbon::now()->format('D d-M-Y');

    // Table Provinsi
    $tampil = DB::table('provinsis')
              ->join('kotas','kotas.provinsi_id','=','provinsis.id')
              ->join('kecamatans','kecamatans.kota_id','=','kotas.id')
              ->join('kelurahans','kelurahans.kecamatan_id','=','kecamatans.id')
              ->join('rws','rws.kelurahan_id','=','kelurahans.id')
              ->join('trackings','trackings.rw_id','=','rws.id')
              ->select('nama_provinsi',
                      DB::raw('sum(trackings.positif) as positif'),
                      DB::raw('sum(trackings.sembuh) as sembuh'),
                      DB::raw('sum(trackings.meninggal) as meninggal'))
              ->groupBy('nama_provinsi')->orderBy('nama_provinsi','ASC')
              ->get();

    // Table Global
    $datadunia= file_get_contents("https://api.kawalcorona.com/");
    $dunia = json_decode($datadunia, TRUE);

    return view('frontend.index',compact('positif','sembuh','meninggal','posglobal', 'tanggal','tampil','dunia'));
    }
}
