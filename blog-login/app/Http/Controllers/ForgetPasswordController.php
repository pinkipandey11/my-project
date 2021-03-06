<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Carbon\Carbon;
use Mail;

class ForgetPasswordController extends Controller
{
    public function getEmail()
    {

       return view('email');
    }

    public function postEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(60);

        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );

        Mail::send('verify',['token' => $token], function($message) use ($request) {
                  $message->from('email@example.com');
                  $message->to($request->email);
                  $message->subject('Reset Password Notification');
               });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }
}

