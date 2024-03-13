<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use

use Illuminate\Http\Request;
use App\Models\Contactl

class ContactController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Contact::create($request->all());

        return redirect()->back()
                        ->with(['Success' => 'Terimakasi telah menghubungi kami. Kami akan membalas secepatnya']);
    }
}
