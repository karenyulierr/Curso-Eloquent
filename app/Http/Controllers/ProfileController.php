<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){

        $profiles = Profile::latest('created_at')->paginate(20);
        return view('sistema.home',compact('profiles')); 
    }
}
