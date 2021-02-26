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
            ->sum('Positif');
        $sembuh = DB::table('trackings')
            ->sum('Sembuh');
        $meninggal = DB::table('trackings')
            ->sum('Meninggal');

        //$global = file_get_contents('https://api.kawalcorona.com/positif');
        //$posglobal = json_decode($global, TRUE);

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
                          DB::raw('SUM(trackings.positif) as Positif'),
                          DB::raw('SUM(trackings.sembuh) as Sembuh'),
                          DB::raw('SUM(trackings.meninggal) as Meninggal'))
                  ->groupBy('provinsi_id')->orderBy('provinsi_id','ASC')
                  ->get();

        // Table Global
        //$datadunia= file_get_contents("https://api.kawalcorona.com/");
        //$dunia = json_decode($datadunia, TRUE);

        return view('frontend.index',compact('positif','sembuh','meninggal', 'tanggal','tampil'));
    }
}
