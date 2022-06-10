<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'posts'
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $validateData = $request->validate([
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => ['required', 'unique:users', 'email:dns'],
            'password' => 'required|min:5', 
            'name' => 'required|max:255' 
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        // $request->session()->flash('success', 'Registration successfull ! Please login');        
        return redirect('/login')->with('success', 'Registration successfull !');
    }

}
