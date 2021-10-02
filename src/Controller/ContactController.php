<?php

namespace App\Controller;

use App\Validation\Validator;

class ContactController {

    public function index(array $data){
        $validator = new Validator($_POST);
        $validated = $validator->validate([
            'name' => ['required', 'string', 'min:3'],
            'email' => ['string', 'email'],
            'subject' => ['string', 'min:5'],
            'message' => ['string', 'min:5']
        ]);
        $header = "From: CMC <kodononmahuwanu@gmail.com>\n";
        $header .= "MIME-version: 1.0\n";
        $header .= "Content-type: text/html; charset=utf-8\n";
        $header .= "Content-Transfert-Encoding: 8bit";
        $message = [];
        $contenu = '';
        foreach($data as $name => $value){
            $contenu .= "$name: $value\n";
        }
        
        $send = mail('kodononmahuwanu@gmail.com', $data['subject'], $contenu, $header);
        if ($send)
            $message[1] = 'Message envoyé avec success, Merci!';
        else
            $message[0] = 'Echec, le message n\'a pu être envoyer';
        return render('index', null, $message );
    }
}