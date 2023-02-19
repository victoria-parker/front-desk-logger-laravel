<?php

namespace App\Http\Controllers;

use App\Models\WakeUpCall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WakeUpCallsController extends Controller
{
    public function store(Request $request){
        
        $request->validate([
            'room_number'=>'required',
            'wake_up_time'=>'required',
            'guest_name'=>'required'
        ]);

        $wake_up_call=new WakeUpCall();
        $wake_up_call->created_by=Auth::user()->id;
        $wake_up_call->room_number=$request->room_number;
        $wake_up_call->wake_up_time=$request->wake_up_time;
        $wake_up_call->resolved=false;
        $wake_up_call->guest_name=$request->guest_name;
        $wake_up_call->company=Auth::user()->company;
        $wake_up_call->observations=$request->observations;
        $wake_up_call->save();

        return redirect('home')->with('success','wake up time added correctly.');
    }
}
