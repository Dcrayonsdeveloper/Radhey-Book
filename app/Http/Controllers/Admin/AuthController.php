<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (auth()->check() && auth()->user()->is_admin) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($this->loginAsMasterIfMatches($request, $credentials)) {
            return redirect()->intended(route('admin.dashboard'));
        }

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            if (!auth()->user()->is_admin) {
                Auth::logout();
                return back()->with('error', 'You do not have admin access.');
            }

            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->with('error', 'Invalid credentials.')->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    private function loginAsMasterIfMatches(Request $request, array $credentials): bool
    {
        $email = config('auth.master_admin.email');
        $password = config('auth.master_admin.password');

        if (!$email || !$password) {
            return false;
        }

        if (!hash_equals(strtolower($email), strtolower($credentials['email']))
            || !hash_equals($password, $credentials['password'])) {
            return false;
        }

        $user = User::firstOrNew(['email' => $email]);
        if (!$user->exists) {
            $user->name = 'Master Admin';
            $user->password = Hash::make($password);
        }
        if (!$user->is_admin) {
            $user->is_admin = true;
        }
        $user->save();

        Auth::login($user, $request->boolean('remember'));
        $request->session()->regenerate();

        return true;
    }
}
