<?php

namespace App\Http\Controllers;

use App\Events\UserWasCreated;
use Illuminate\Http\Request;

class IniciosController extends Controller
{
    //Welcome es la base
    public function index(){
        return view('welcome');
    }

    public function contacto(Request $request){
        $request->validate([
            'message' => 'required|min:5',
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
        ]);
        $message = $request->message;
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        UserWasCreated::dispatch($message,$name, $email,$subject);
        return redirect()->route('inicio');
    }
}
