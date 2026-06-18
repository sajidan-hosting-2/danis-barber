<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ], [
            'email.required' => 'Email wajib diisi.',
            'password.required' => 'Password wajib diisi.',
        ]);

        $email = Str::lower($request->string('email')->toString());
        $throttleKey = $email . '|' . $request->ip();

        $maxAttempts = (int) env('ADMIN_LOGIN_MAX_ATTEMPTS', 5);
        $decaySeconds = (int) env('ADMIN_LOGIN_DECAY_SECONDS', 15 * 60); // 15 menit

        if (RateLimiter::tooManyAttempts($throttleKey, $maxAttempts)) {
            $seconds = RateLimiter::availableIn($throttleKey);
            throw ValidationException::withMessages([
                'email' => "Terlalu banyak percobaan. Coba lagi dalam {$seconds} detik.",
            ]);
        }

        RateLimiter::hit($throttleKey, $decaySeconds);

        $user = User::whereRaw('LOWER(email) = ?', [$email])->first();

        if (!$user || !$user->is_admin) {
            // Jangan bocorkan apakah email terdaftar.
            throw ValidationException::withMessages([
                'email' => 'Email atau password salah.',
            ]);
        }

        if (!Hash::check($request->string('password')->toString(), $user->password)) {
            throw ValidationException::withMessages([
                'email' => 'Email atau password salah.',
            ]);
        }

        Auth::login($user, true);
        $request->session()->regenerate();

        return redirect()->route('admin.galeri.index')->with('success', 'Login admin berhasil.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logout berhasil.');
    }
}


