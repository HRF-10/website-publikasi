<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\User;
use Illuminate\Support\Facades\File;
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

        $this->logLoginAttempt($name, $nis_input, $user && $user->nis === $nis_input);

        // Jika pengguna ditemukan dan nis cocok
        if ($user && $user->nis === $nis_input) {
            Auth::login($user); // Melakukan login pengguna
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return redirect()->back()->withInput()->with('error_message', 'Data siswa tidak ditemukan.');
    }

    public function loginKelasX()
    {
        $title = "E-ASKADUTA | Login";
        return view('login.loginx', compact('title'));
    }

    public function authenticateKelasX(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string',
            'kelas' => 'required|string'
        ]);

        // Ambil input dan ubah ke uppercase
        $name = strtoupper($request->input('name'));
        $kelas = strtoupper($request->input('kelas'));

        // Cari user berdasarkan nama
        $user = User::where('name', $name)->first();

        if ($user) {
            // Cek apakah NIS dimulai dengan "24." dan kelas dimulai dengan "X"
            $isNis24 = str_starts_with($user->nis, '24.');
            $isKelasX = str_starts_with($user->kelas, 'X');

            if ($isNis24 && $isKelasX && $user->kelas === $kelas) {
                // Jika kondisi terpenuhi, login user dan redirect ke dashboard
                Auth::login($user);
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
        }

        // Jika gagal, kembalikan ke halaman login dengan pesan kesalahan
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

    private function logLoginAttempt($name, $nis, $success)
    {
        $dateTime = now()->format('Y-m-d H:i:s');
        $status = $success ? 'SUCCESS' : 'FAILURE';
        $logMessage = "[$dateTime] Username: $name, NIS: $nis, Status: $status\n";

        File::append(storage_path('logs/login_attempts.txt'), $logMessage);
    }
}
