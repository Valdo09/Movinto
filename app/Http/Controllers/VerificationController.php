<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerificationController extends Controller
{
  

public function verify(EmailVerificationRequest $request): RedirectResponse


{
    $request->fulfill();

    return redirect('/home');
}
}
