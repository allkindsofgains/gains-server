<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string',
        ]);
    }

    public function login(Request $request)
    {
        // ...
    }

    public function logout(Request $request)
    {
        // ...
    }

    public function resetPassword(Request $request)
    {
        // ...
    }

    public function forgetPassword(Request $request)
    {
        // ...
    }
}
