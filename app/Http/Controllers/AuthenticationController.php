<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AuthenticationController extends Controller
{
    public function signin(Request $request)
    {
        if ($request->password != 'admin') {
            abort(403);
        }

        return response()->redirectTo(route('home'))->cookie(
            'signed_in',
            'true',
            10000000000 // minutes
        );
    }

    public function signout()
    {
        Cookie::queue(Cookie::forget('signed_in'));
        return redirect()->route('home');
    }
}
