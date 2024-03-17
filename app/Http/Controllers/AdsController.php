<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function index(){
        
        $ads =  Ad::where('status',1)
                ->whereColumn('created_at','updated_at')
                ->paginate(20);
        
        //Count, avg, sum, max, min
        //$ads = Ad::all()->count();
        $totalActivos = $ads->count();
        $totalvisita = $ads->avg('visita');
        $sumaVisita = $ads->sum('visita');
        return view('sistema.ads',compact('ads','totalActivos','totalvisita','sumaVisita'));
    }
}
