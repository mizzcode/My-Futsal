<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function showVerifyRegister()
    {
        return view('verify-register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::query()->where('email', $request->email)->first();
        
        if ($user && $user->hasVerifiedEmail()) {
            return redirect()->back()->withErrors(['email' => 'Email already registered.']);
        }

        $verificationCode = random_int(100000, 999999);

        if ($user) {
            $user->verification_code = $verificationCode;
            $user->save();
        } else {
            $user = User::query()->create([
                'email' => $request->email,
                'verification_code' => $verificationCode,
            ]);
        }

        Mail::to($request->email)->send(new VerifyEmail($verificationCode));

        $request->session()->put('email', $request->email);

        return redirect()->route('verifyRegister')->with('status', 'Verification email sent!');
    }

    public function verifyCode(Request $request)
    {
        
        if (User::query()->where('username', $request->username)->first()) {
            return redirect()->back()->withErrors(['username' => 'Username already taken.']);
        }
        
        $email = $request->session()->get('email');

        $request->validate([
            'verification_code' => 'required|numeric',
            'username' => 'required|string|max:50',
            'full_name' => 'required|string|max:50',
            'password' => 'required|string|max:50',
            'phone_number' => 'required|string|max:15',
        ]);

        $user = User::query()->where('email', $email)
                    ->where('verification_code', $request->verification_code)
                    ->first();

        if ($user) {
            $user->username = $request->username;
            $user->full_name = $request->full_name;
            $user->password = Hash::make($request->password);
            $user->phone_number = $request->phone_number;
            $user->verification_code = null;
            $user->markEmailAsVerified();
            $user->save();

            return redirect()->route('login')->with('status', 'Email verified successfully!');
        } else {
            return redirect()->route('verifyRegister')->withErrors(['verification_code' => 'Invalid verification code.']);
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        return back()->withErrors([
            'err' => 'Username atau Password salah.',
        ]);
    }
}