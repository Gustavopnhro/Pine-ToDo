<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function index(){
        $isLogged = Auth::check();
        if($isLogged){
            return redirect(route('home'));
        }

        return view('login');

    }

    public function loginAction(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);


        if (Auth::attempt($validator->validated())) {
            return redirect()->intended('/');

        } else {
            return redirect()->back()->withErrors(['password' => 'Credenciais inválidas'])->withInput();
        }

    }

    public function register(){
        $isLogged = Auth::check();
        if($isLogged){
            return redirect(route('home'));
        }

        return view('register');
    }

    public function registerAction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('register')
                ->withErrors($validator)
                ->withInput();
        }

        $user = $request->only(['name', 'email', 'password']);
        $user['passowrd'] = Hash::make($user['password']);
        User::create($user);
        return redirect(route('login'));
    }

    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }
    
}
