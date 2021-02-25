<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Rw;
use App\Models\Tracking;
use DB;
use Validator;

class ApiController extends Controller
{

    public function provinsi()
    {
        $provinsi = DB::table('provinsis')
        ->select('provinsis.nama_provinsi','provinsis.kode_provinsi',
        DB::raw('SUM(trackings.positif) as Positif'),
        DB::raw('SUM(trackings.sembuh) as Sembuh'),
        DB::raw('SUM(trackings.meninggal) as Meninggal'))
            ->join('kotas','provinsis.id','=','kotas.provinsi_id')
            ->join('kecamatans','kotas.id','=','kecamatans.kota_id')
            ->join('kelurahans','kecamatans.id','=','kelurahans.kecamatan_id')
            ->join('rws','kelurahans.id','=','rws.kelurahan_id')
            ->join('trackings','rws.id','=','trackings.rw_id')
        ->groupBy('provinsis.id')->get();

    $positif = DB::table('provinsis')
    ->join('kotas','provinsis.id','=','kotas.provinsi_id')
    ->join('kecamatans','kotas.id','=','kecamatans.kota_id')
    ->join('kelurahans','kecamatans.id','=','kelurahans.kecamatan_id')
    ->join('rws','kelurahans.id','=','rws.kelurahan_id')
    ->join('trackings','rws.id','=','trackings.rw_id')
    ->select('trackings.positiif',)
    ->sum('trackings.positif');

    $sembuh = DB::table('provinsis')
    ->join('kotas','provinsis.id','=','kotas.provinsi_id')
    ->join('kecamatans','kotas.id','=','kecamatans.kota_id')
    ->join('kelurahans','kecamatans.id','=','kelurahans.kecamatan_id')
    ->join('rws','kelurahans.id','=','rws.kelurahan_id')
    ->join('trackings','rws.id','=','trackings.rw_id')
    ->select('trackings.positiif',
    'trackings.sembuh','trackings.meninggal')
    ->sum('trackings.sembuh');

    $meninggal = DB::table('provinsis')
    ->join('kotas','provinsis.id','=','kotas.provinsi_id')
    ->join('kecamatans','kotas.id','=','kecamatans.kota_id')
    ->join('kelurahans','kecamatans.id','=','kelurahans.kecamatan_id')
    ->join('rws','kelurahans.id','=','rws.kelurahan_id')
    ->join('trackings','rws.id','=','trackings.rw_id')
    ->select('trackings.positiif',
    'trackings.sembuh','trackings.meninggal')
    ->sum('trackings.meninggal');

       return response([
            'success' => true,
            'data' => ['Hari Ini' => $provinsi,
                      ],
            'Total' => ['Jumlah Positif'   => $positif,
                        'Jumlah Sembuh'    => $sembuh,
                        'Jumlah Meninggal'  => $meninggal,
                    ],

            'message' => 'Berhasil'
        ], 200);
}

public function kota()
{
    $kota = DB::table('kotas')
    ->select('provinsis.nama_provinsi','kotas.nama_kota','kotas.kode_kota',
    DB::raw('SUM(trackings.positif) as Positif'),
    DB::raw('SUM(trackings.sembuh) as Sembuh'),
    DB::raw('SUM(trackings.meninggal) as Meninggal'))
        ->join('provinsis','provinsis.id','=','kotas.provinsi_id')
        ->join('kecamatans','kotas.id','=','kecamatans.kota_id')
        ->join('kelurahans','kecamatans.id','=','kelurahans.kecamatan_id')
        ->join('rws','kelurahans.id','=','rws.kelurahan_id')
        ->join('trackings','rws.id','=','trackings.rw_id')
    ->groupBy('kotas.id')->get();

    return response([
        'success' => true,
        'data' => ['Hari Ini' => $kota,
                  ],
        'message' => 'Berhasil'
    ], 200);
}

public function kecamatan()
{
    $kecamatan = DB::table('kecamatans')
    ->select('kotas.nama_kota','kecamatans.nama_kecamatan','kecamatans.kode_kecamatan',
    DB::raw('SUM(trackings.positif) as Positif'),
    DB::raw('SUM(trackings.sembuh) as Sembuh'),
    DB::raw('SUM(trackings.meninggal) as Meninggal'))
        ->join('kotas','kotas.id','=','kecamatans.kota_id')
        ->join('kelurahans','kecamatans.id','=','kelurahans.kecamatan_id')
        ->join('rws','kelurahans.id','=','rws.kelurahan_id')
        ->join('trackings','rws.id','=','trackings.rw_id')
    ->groupBy('kecamatans.id')->get();

    return response([
        'success' => true,
        'data' => ['Hari Ini' => $kecamatan,
                  ],
        'message' => 'Berhasil'
    ], 200);
}

public function kelurahan()
{
    $kelurahan = DB::table('kelurahans')
    ->select('kecamatans.nama_kecamatan','kelurahans.nama_kelurahan','kelurahans.kode_kelurahan',
    DB::raw('SUM(trackings.positif) as Positif'),
    DB::raw('SUM(trackings.sembuh) as Sembuh'),
    DB::raw('SUM(trackings.meninggal) as Meninggal'))
        ->join('kecamatans','kecamatans.id','=','kelurahans.kecamatan_id')
        ->join('rws','kelurahans.id','=','rws.kelurahan_id')
        ->join('trackings','rws.id','=','trackings.rw_id')
    ->groupBy('kecamatans.id')->get();

    return response([
        'success' => true,
        'data' => ['Hari Ini' => $kelurahan,
                  ],
        'message' => 'Berhasil'
    ], 200);
}

    public function rw()
    {
        $rw = DB::table('trackings')->select([
            DB::raw('SUM(positif) as Positif'),
            DB::raw('SUM(sembuh) as Sembuh'),
            DB::raw('SUM(meninggal) as Meninggal'),
        ])->groupBy('tanggal')->get();

        $positif = DB::table('rws')
        ->select('trackings.positif',
        'trackings.sembuh', 'trackings.meninggal')
        ->join('trackings', 'rws.id', '=', 'trackings.rw_id')
        ->sum('trackings.positif');

        $sembuh = DB::table('rws')
        ->select('trackings.positif',
        'trackings.sembuh', 'trackings.meninggal')
        ->join('trackings', 'rws.id', '=', 'trackings.rw_id')
        ->sum('trackings.sembuh');

        $meninggal = DB::table('rws')
        ->select('trackings.positif',
        'trackings.sembuh', 'trackings.meninggal')
        ->join('trackings', 'rws.id', '=', 'trackings.rw_id')
        ->sum('trackings.meninggal');

            return response([
                'secces' => true,
                'data' =>[
                            'Hari ini' => $rw
            ],
                'Total' => [
                            'Jumlah positif' => $positif,
                            'Jumlah Sembuh' => $sembuh,
                            'Jumlah Meninggal' => $meninggal,
            ],
                'message' => 'Berhasil'
        ]);

    }

    public function seluruh()
    {
    $positif = DB::table('provinsis')
    ->join('kotas','provinsis.id','=','kotas.provinsi_id')
    ->join('kecamatans','kotas.id','=','kecamatans.kota_id')
    ->join('kelurahans','kecamatans.id','=','kelurahans.kecamatan_id')
    ->join('rws','kelurahans.id','=','rws.kelurahan_id')
    ->join('trackings','rws.id','=','trackings.rw_id')
    ->select('trackings.positiif',)
    ->sum('trackings.positif');

    $sembuh = DB::table('provinsis')
    ->join('kotas','provinsis.id','=','kotas.provinsi_id')
    ->join('kecamatans','kotas.id','=','kecamatans.kota_id')
    ->join('kelurahans','kecamatans.id','=','kelurahans.kecamatan_id')
    ->join('rws','kelurahans.id','=','rws.kelurahan_id')
    ->join('trackings','rws.id','=','trackings.rw_id')
    ->select('trackings.positiif',
    'trackings.sembuh','trackings.meninggal')
    ->sum('trackings.sembuh');

    $meninggal = DB::table('provinsis')
    ->join('kotas','provinsis.id','=','kotas.provinsi_id')
    ->join('kecamatans','kotas.id','=','kecamatans.kota_id')
    ->join('kelurahans','kecamatans.id','=','kelurahans.kecamatan_id')
    ->join('rws','kelurahans.id','=','rws.kelurahan_id')
    ->join('trackings','rws.id','=','trackings.rw_id')
    ->select('trackings.positiif',
    'trackings.sembuh','trackings.meninggal')
    ->sum('trackings.meninggal');

       return response([
            'success' => true,
            'data' => 'Data seluruh Indonesia',
            'Jumlah Positif'   => $positif,
            'Jumlah Sembuh'    => $sembuh,
            'Jumlah Meninggal'  => $meninggal,
            'message' => 'Berhasil'
        ], 200);
    }

    public function positif()
    {
        $positif = DB::table('rws')
        ->select('trackings.positif')
        ->join('trackings', 'rws.id', '=', 'trackings.rw_id')
        ->sum('trackings.positif');

    return response([
        'success' => true,
        'data' => 'Data positif',
        'Jumlah Positif'   => $positif,
        'message' => 'Berhasil'
    ], 200);
    }

    public function sembuh()
    {
    $sembuh = DB::table('provinsis')
    ->join('kotas','provinsis.id','=','kotas.provinsi_id')
    ->join('kecamatans','kotas.id','=','kecamatans.kota_id')
    ->join('kelurahans','kecamatans.id','=','kelurahans.kecamatan_id')
    ->join('rws','kelurahans.id','=','rws.kelurahan_id')
    ->join('trackings','rws.id','=','trackings.rw_id')
    ->select('trackings.positiif',)
    ->sum('trackings.positif');

    return response([
        'success' => true,
        'data' => 'Data positif',
        'Jumlah Sembuh'   => $sembuh,
        'message' => 'Berhasil'
    ], 200);
    }

    public function meninggal()
    {
    $meninggal = DB::table('provinsis')
    ->join('kotas','provinsis.id','=','kotas.provinsi_id')
    ->join('kecamatans','kotas.id','=','kecamatans.kota_id')
    ->join('kelurahans','kecamatans.id','=','kelurahans.kecamatan_id')
    ->join('rws','kelurahans.id','=','rws.kelurahan_id')
    ->join('trackings','rws.id','=','trackings.rw_id')
    ->select('trackings.positiif',)
    ->sum('trackings.positif');

    return response([
        'success' => true,
        'data' => 'Data positif',
        'Jumlah Meninggal'   => $meninggal,
        'message' => 'Berhasil'
    ], 200);
    }

    public $data = [];
    public function global()
    {
     $response = Http::get('https://api.kawalcorona.com')->json();
     foreach($response as $data => $val) {
        $raw = $val['attributes'];
        $res = [
            'Negara' => $raw ['Country_Region'],
            'Positif' => $raw ['Confirmed'],
            'Sembuh' => $raw ['Recovered'],
            'Meninggal' => $raw ['Deaths']

        ];
        array_push($this->data, $res);
     }
    $data = [
         'succes' =>true,
         'data' => $this->data,
         'message' => 'Berhasil'
     ];
     return response()->json($data,200);
    }

}
