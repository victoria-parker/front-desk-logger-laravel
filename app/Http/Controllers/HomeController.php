<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function show(){
        if(!Auth::check()){
            return redirect('/login');
        }
        return view('home.index');
    }

    public function index(){
        if(!Auth::check()){
            return redirect('/login');
        }
        
        $issues=Issue::all();

        return view('home.index', ['issues'=>$issues]);
    }



}
