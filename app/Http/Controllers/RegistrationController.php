<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('auth.registration');
    }

    public function store()
    {
        $this->validate(request(), User::STORE_RULES);

        $user = new User;

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        if (request('password') !== request('password_confirmation')) {
            session()->flash('message', 'Nisu ista dva passworda!');
            return redirect()->route('registration');
        }

        $user->save();

        auth()->login($user);

        return redirect('/');
    }
}
