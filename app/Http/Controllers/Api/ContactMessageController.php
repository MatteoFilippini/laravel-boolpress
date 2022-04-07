<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Validator;

class ContactMessageController extends Controller
{
    public function send(Request $request)
    {
        // prendo l email e il messaggio
        $data = $request->all();
        // validate email
        $validator = Validator::make($data, [
            'email' => 'required|email',
            'message' => 'required|min:5'
        ], [
            'email.required' => 'La mail è obbligatoria',
            'email.required' => 'L\'indirizzo email non è valido',
            'message.required' => 'Il testo del messaggio è obbligatorio',
        ]);
        // valido --------- restituisce comunque 200 perchè l'API è corretta
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()]);
        };
        // creo la email
        $mail = new ContactMessageMail($data);
        // la invio
        Mail::to(env('MAIL_ADMIN_ADDRESS'))->send($mail);

        // return response('Email inviata', 204);
        return response('Mail inviata', 204);
    }
}
