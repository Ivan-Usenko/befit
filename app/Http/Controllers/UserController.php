<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        if (!Auth::check())
        {
            return redirect()->route('auth.login');
        }

        return view('user.profile');
    }

    public function edit()
    {
        if (!Auth::check())
        {
            return redirect()->route('auth.login');
        }
        
        return view('user.edit');
    }

    public function update()
    {
        $validate = request()->validate(
            [
                'name' => 'required|max:30'
            ]
        );

        return redirect()->route('user.profile');
    }
}
