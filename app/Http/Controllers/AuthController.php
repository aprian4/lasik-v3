<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required|numeric|digits:18',
            'password' => 'required'
        ]);

        $data_login = [
            'username' => $request->username,
            'password' => $request->password
        ];

        $user = User::where('username', '=', $request->username)->first();
        if (isset($user)) {
            if ($user->password == md5($request->password)) { // If their password is still MD5
                $user->password = Hash::make($request->password); // Convert to new format
                $user->save();

                $request->session()->regenerate();
                return redirect()->intended('/');
            } else if (Auth::attempt($data_login)) {
                $request->session()->regenerate();
                return redirect()->intended('/');
            } else {
                return back()->with('loginError', 'NIP atau Password Salah!');
            }
        } else {
            return back()->with('loginError', 'NIP atau Password Salah!');
        }
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
