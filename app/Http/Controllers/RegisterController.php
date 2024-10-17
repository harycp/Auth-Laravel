<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'Register',
        ]);
    }
    public function store(Request $request)
    {
        $dataVlidated =  $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|max:255|unique:users',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:5|max:255',
        ]);

        $dataVlidated['password'] = Hash::make($dataVlidated['password']);

        if($dataVlidated){
            User::create($dataVlidated);
            return redirect('/login')->with('success', 'Register success');
        }else{
            return "Register failed";
        }

    }
}
