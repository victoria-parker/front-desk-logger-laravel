<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request){
        $user=User::create($request->validated());
        return redirect('/login')->with('success','Account created successfully');
    }
}
