<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        $title = "E-ASKADUTA | Login";
        
        return view('login.login', compact('title'));
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'nis' => 'required|string'
        ]);

        // Mengambil data input dari form login
        $name = strtoupper($request->input('name'));
        $nis_input = $request->input('nis');

        // Cari pengguna berdasarkan field 'name'
        $user = User::where('name', $name)->first();

        // Jika pengguna ditemukan dan nis cocok
        if ($user && $user->nis === $nis_input) {
            Auth::login($user); // Melakukan login pengguna
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return redirect()->back()->withInput()->with('error_message', 'Data siswa tidak ditemukan.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function dashboard()
    {
        $title = "E-ASKADUTA | Dashboard";
        $abouts = About::all();
        $showBody = false;
        $showExcerpt = true;
        
        return view('dashboard', compact('title', 'abouts', 'showBody', 'showExcerpt'));
    }
}
