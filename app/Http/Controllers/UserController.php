<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function profile()
    {
        return view('user.profile');
    }

    public function edit()
    {        
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
