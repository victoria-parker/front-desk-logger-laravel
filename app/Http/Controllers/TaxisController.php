<?php

namespace App\Http\Controllers;

use App\Models\Taxi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaxisController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'room_number'=>'required',
            'pick_up_time'=>'required',
            'booking_number'=>'required'
        ]);

        $taxi=new Taxi();
        $taxi->created_by=Auth::user()->id;
        $taxi->company=Auth::user()->company;
        $taxi->resolved=false;
        $taxi->room_number=$request->room_number;
        $taxi->pick_up_time=$request->pick_up_time;
        $taxi->booking_number=$request->booking_number;
        $taxi->observations=$request->observations;
        $taxi->save();

        return redirect('home')->with('success','Taxi added correctly.');
    }
}
