<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotesController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'note'=>'request'
        ]);

        $note=new Note();
        $note->created_by=Auth::user()->id;
        $note->company=Auth::user()->company;
        $note->note=$request->note;
        $note->resolved=false;
        $note->save();

        return redirect('home')->with('success','note added correctly');
    }
}
