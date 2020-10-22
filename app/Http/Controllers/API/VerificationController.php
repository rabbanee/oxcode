<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
  public function verify($user_id, Request $request)
  {
    if (!$request->hasValidSignature()) {
      return response()->json(["msg" => "Invalid/Expired url provided."], 401);
    }

    $user = User::findOrFail($user_id);

    if (!$user->hasVerifiedEmail()) {
      $user->markEmailAsVerified();
    }

    return redirect('https://github.com/squest');
  }

  public function resend(Request $request)
  {
    $request->validate([
      'email' => 'required|email'
    ]);
    $user = User::where('email', '=', $request->input('email'))->firstOrFail();;

    if ($user->hasVerifiedEmail()) {
      return response()->json(["msg" => "Email already verified."], 400);
    }

    $user->sendEmailVerificationNotification();

    return response()->json(["msg" => "Email verification link sent on your email id"]);
  }
}
