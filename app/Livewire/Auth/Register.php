<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class Register extends Component
{
    public $name, $email, $password, $password_confirmation;
    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.app')->section('content');;
    }

    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed'],
        ];
    }

    public function registerUser()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        if($user){
            session()->flash('success', 'You are registered successfully!');
            return redirect(route("login"));
        }else{
            return $this->error = "Something went wrong!";
         };

        // Auth::login($user, true);
        // event(new Registered($user));
        // return redirect()->to(RouteServiceProvider::HOME);
    }
}
