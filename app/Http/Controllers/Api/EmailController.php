<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests\ContactFormRequest;

class EmailController extends Controller
{
    public function contactForm(ContactFormRequest $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        Mail::to('programuotojas.rene@gmail.com')->send(new \App\Mail\ContactForm($data));

        return response()->json([
            'data' => 'Jūsų žinutė išsiųsta'
        ], 200);

    }
}
