<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index(){
        if(!Auth::check()){
            return redirect('/login');
        }
        
        $issues=Issue::all()->where('company',Auth::user()->company)->where('resolved',false);

        return view('home.index', ['issues'=>$issues]);
    }



}
