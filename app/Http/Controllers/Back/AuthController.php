<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('back.auth.login');
    }

    public function loginPost(Request $request){
        dd($request->post());
    }
}
