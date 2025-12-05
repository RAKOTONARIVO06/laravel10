<?php

namespace App\Http\Controllers;
use App\Notifications\UserCreatedNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    //
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/articles');
        }

        return back()->with('error', 'Email ou mot de passe incorrect.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('login');
    }


    public function showRegister()
    {
        return view('auth.register');
    }

    // Traitement inscription
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed', // password_confirmation
            'telephone' => 'nullable|string|max:20',
            'role' => 'nullable|in:user,admin',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telephone' => $request->telephone,
            'role' => $request->role ?? 'user',
        ]);
        // 📬 Envoi email automatique
        $user->notify(new UserCreatedNotification($user));

        Auth::login($user); // Connexion automatique après inscription

        return redirect()->route('articles.index');
    }
}
