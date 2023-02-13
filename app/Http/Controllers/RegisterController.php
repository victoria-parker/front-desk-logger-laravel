<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{

    public function show(){
        if(Auth::check()){
            return redirect('/home');
        }
        return view('auth.register');
    }

    public function register(RegisterRequest $request){

            $user=User::create($request->validated());
            $company=new Company;
            $company->company=$request->company;
            $company->save();
            return redirect('/login')->with('success','Account created successfully');


    }
}
