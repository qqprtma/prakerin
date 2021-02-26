<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Models\Provinsi;
use App\Http\Models\RW;
use App\Http\Models\Tracking;
use DB;
use Illuminate\Support\Carbon;
class FrontController extends Controller
{
    public function index()
    {
        // Count Up
        $positif = DB::table('trackings')
            ->sum('positif');
        $sembuh = DB::table('trackings')
            ->sum('sembuh');
        $meninggal = DB::table('trackings')
            ->sum('meninggal');

        //$global = file_get_contents('https://api.kawalcorona.com/positif');
        //$posglobal = json_decode($global, TRUE);

        // Date
        $tanggal = Carbon::now()->format('D d-M-Y');

        // Table Provinsi
        $tampil = DB::table('provinsis') ->select('provinsis.kode_provinsi','provinsis.nama_provinsi',
        DB::raw('SUM(trackings.jumlah_positif) as positif'),
        DB::raw('SUM(trackings.jumlah_sembuh) as sembuh'),
        DB::raw('SUM(trackings.jumlah_meninggal) as meninggal'))
        ->join('kotas','provinsis.id','=','kotas.provinsi_id')
        ->join('kecamatans','kotas.id','=','kecamatans.kota_id')
        ->join('kelurahans','kecamatans.id','=','kelurahans.kecamatan_id')
        ->join('rws','kelurahans.id','=','rws.kelurahan_id')
        ->join('trackings','rws.id','=','trackings.rw_id')
        ->groupBy('provinsis.id')->orderBy('nama_provinsi','ASC')
        ->get();

        // Table Global
        //$datadunia= file_get_contents("https://api.kawalcorona.com/");
        //$dunia = json_decode($datadunia, TRUE);

        return view('frontend.index',compact('positif','sembuh','meninggal', 'tanggal','tampil'));
    }
}
