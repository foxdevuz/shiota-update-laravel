<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function signin(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
    
        if (Auth::attempt($validatedData)) {
            session()->put('admin-logged', Str::random(30));
            return redirect('/admin/dashboard');
        } else {
            return redirect()->back()->with('error', 'Login yoki parol xato');
        }
    }
    public function dashboard()
    {
        return view('admin.index');
    }
}
