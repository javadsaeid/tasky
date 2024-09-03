<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    /**
     * @throws ValidationException
     */
    public function store()
    {
        $credential = request()
            ->validate([
                'email' => ['required', 'email'],
                'password' => ['required']
            ]);

        if (! Auth::attempt($credential)) {
            throw ValidationException::withMessages(['email' => 'Sorry, invalid credential']);
        }

        request()->session()->regenerate();

        return redirect('/jobs');
    }


    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
