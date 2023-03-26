<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Notifications\VerifyEmail;

class RegisterController extends Controller
{
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request) 
    {
        $user = User::create($request->validated());
        

         auth()->login($user);
         $user->sendEmailVerificationNotification(new VerifyEmail);

        return redirect()->route('/home');    }
}

