<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    function login(): View
    {
        return view('auth.login');
    }
    function loginAction(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            alert('Sukses Login', 'Selamat Datang ' . Auth::user()->username, 'success');
            return redirect()->route('index');
        }

        alert('Gagal Login', 'Harap masukkan data yang valid', 'error');
        return back();
    }

    function register(): View
    {
        return view('auth.register');
    }
    function registerAction(Request $request): RedirectResponse
    {
        $u = User::where('username', $request->username)->first();
        if ($u != null) {
            alert('Gagal Register', 'username: ' . $request->username . ' telah digunakan', 'error');
            return back();
        }

        User::create($request->except('_token'));
        alert('Sukses Register', 'Silahkan memasukkan username dan password yang telah anda daftarkan untuk login', 'success');
        return redirect()->route('login');
    }
    function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('index');
    }
}
