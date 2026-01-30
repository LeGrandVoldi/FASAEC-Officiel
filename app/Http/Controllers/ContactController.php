<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = [
        'nom' => $request->nom,
        'email' => $request->email,
        'sujet' => $request->sujet,
        'contenu' => $request->message,
    ];

    // 1️⃣ Mail vers FASAEC
    Mail::send('emails.contact', $data, function ($mail) use ($data) {
        $mail->to('contact@fasaec.cd')
             ->subject('Message depuis le formulaire de contact FASAEC')
             ->from('fasaeccontact@gmail.com', 'FASAEC - Contact')
             ->replyTo($data['email'], $data['nom']);
    });

    // 2️⃣ Mail de confirmation vers l'utilisateur
    Mail::send('emails.confirmation', $data, function ($mail) use ($data) {
        $mail->to($data['email'])
             ->subject('Confirmation de réception - FASAEC')
             ->from('contact@fasaec.cd', 'FASAEC');
    });

    return back()->with('success', 'Votre message a été envoyé avec succès. Un email de confirmation vous a été envoyé.');
    }
}
