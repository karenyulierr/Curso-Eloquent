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
        
        return view('sistema.ads',compact('ads'));
    }
}
