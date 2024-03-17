<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){

        // $profiles = Profile::latest('created_at')->paginate(20);
        // return view('sistema.home',compact('profiles')); 

        // $ads = Profile::with('ads')->get();
        // $profiles = Profile::find(2);
        // $ads = $profiles->ads()->get();
        // $ads = Profile::has('ads')->get();

        // $ads = Profile::whereHas('ads', function($query){
        //     $query->where('status',true);
        // })->get();

        $ads= User::with('profile.ads')->get();

        return $ads;
    }
}
