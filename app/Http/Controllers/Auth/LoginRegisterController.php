<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginRegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'role' => 'required|string',
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        $credentials = $request->only('email','password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('login')->withSuccess('You have successfully registered & logged in!');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                    break;

                case 'tentor':
                    return redirect()->route('tentor.dashboard');
                    break;

                case 'user':
                    return redirect()->route('user.dashboard');
                    break;

                default:
                    // Jika role tidak sesuai dengan yang diharapkan, atur tindakan yang sesuai
                    break;
            }
        }
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }

    public function userview()
    {
        return view('user.dashboard');
    }

    public function tentorview()
    {
        return view('tentor.dashboard-tentor');
    }

    public function adminview()
    {
        return view('admin.dashboard-admin-');
    }

}
