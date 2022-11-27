<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\registertable;


class LoginController extends Controller
{
    public function about(){

        return view('about');
    }
    public function form(LoginRequest $request){
        $request->validate();
        return view('form');
    }
}
