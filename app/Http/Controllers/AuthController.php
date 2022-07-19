<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginUser;

class AuthController extends Controller
{
    public function loginForm(){
        if(Auth::check()){
            return redirect(route('homepage'));
        } else {
            return view('login');
        }
    }
    public function authLogin(LoginUser  $r){
        if(Auth::attempt(['email' => $r->email, 'password' => $r->password])){
            $r->session()->regenerate();
            return redirect(route('homepage'));
        }
        return back()->withErrors([
            'error-auth' => 'Zadali ste nesprávne heslo alebo E-mail',
        ])->onlyInput('email'); ;
    }
    public function authLogOut(){
		Auth::logout();
		return redirect()->route('login');
	}
}
