<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IssuesController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'room_number'=>'required',
            'issue'=>'required'
        ]);

        $issue=new Issue();
        $issue->room_number=$request->room_number;
        $issue->issue=$request->issue;
        $issue->created_by=Auth::user()->id;
        $issue->company=Auth::user()->company;
        $issue->resolved=false;
        $issue->save();

        return redirect()->route('home')->with('success','issue added correctly.');

    }
}
