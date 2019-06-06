<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    
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

        // \Mail::to($post->user)->send(new VerificationMail());

        // auth()->login($user);

        return redirect('login');
    }
}
