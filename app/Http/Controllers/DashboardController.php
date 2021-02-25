<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{

    public function index(Request $request)
    {
       $positif = DB::table('trackings')->sum('trackings.positif');
       $sembuh = DB::table('trackings')->sum('trackings.sembuh');
       $meninggal = DB::table('trackings')->sum('trackings.meninggal');
       return view("admin.index", compact('positif','sembuh', 'meninggal'));
    }

}
