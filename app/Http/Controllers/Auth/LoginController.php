<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index(){
        if( auth('web')->check() ){
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');

        if( Auth::attempt($credentials, true) ){
            
            //make login failed start
            if( auth('visitor')->check() ){
                $request->session()->flash('failed','Authorized Only');
                return redirect()->route('login');
            }
            //make login failed end

            $request->session()->regenerate();
            $request->session()->flash('success','Login successfully done');
            return redirect()->route('dashboard');
        }
        else{
            $request->session()->flash('failed','Invalid Credentials');
            return redirect()->route('login');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->flash('success','You have successfully logged out');
        return redirect()->route('login');
        
    }
}
