<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ConsoleAuthController extends Controller
{
    /**
     * Show the CMS login form.
     */
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('console.dashboard');
        }

        return view('console.auth.login');
    }

    /**
     * Handle authentication attempt.
     */
    public function login(Request $request)
    {
        $input = $request->validate([
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $remember = $request->boolean('remember');

        // Determine if logging in using email or name (username)
        $field = filter_var($input['email'], FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        $credentials = [
            $field => $input['email'],
            'password' => $input['password'],
        ];

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect()->intended(route('console.dashboard'));
        }

        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }

    /**
     * Log the user out of the CMS.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('console.login');
    }
}
