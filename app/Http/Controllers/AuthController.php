<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('auth.login');
    }

    public function signIn(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        
        $user = User::where('username', $username)->first();
        if ($user && Hash::check($password, $user->password)) {
            $request->session()->put('user', $user);
            $user->last_login = date('Y-m-d H:i:s');
            $user->save();
            return redirect()->route('dashboardView');
        } else {
            return redirect()->route('auth.loginView')->with('error', 'Invalid username or password');
        }

    }

    public function signOut(Request $request)
    {
        $request->session()->forget('user');
        return redirect()->route('auth.loginView');
    }
}
