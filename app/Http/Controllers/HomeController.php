<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\WakeUpCall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index(){
        if(!Auth::check()){
            return redirect('/login');
        }
        
        $issues=Issue::all()->where('company',Auth::user()->company)->where('resolved',false);
        $wake_up_calls=WakeUpCall::all()->where('company',Auth::user()->company)->where('resolved',false);

        return view('home.index', ['issues'=>$issues, 'wake_up_calls'=>$wake_up_calls]);
    }



}
