<?php

/*
- Classe qui génère un modèle d'organisation des informations du formulaire
*/
class ContactContentGenerator {

    public static function generateContactContent($firstName, $name, $email, $message) {
        
        $fileContent = "Nouveau message de contact reçu :\n\n";
        $fileContent .= "Date & Heure : " . date("d-m-Y H:i:s") . "\n";
        $fileContent .= "Prénom : {$firstName}\n";
        $fileContent .= "Nom : {$name}\n";
        $fileContent .= "Email : {$email}\n";
        $fileContent .= "Message :\n\n{$message}\n\n";
        $fileContent .= "---------------------------------------------\n\n";

        return $fileContent;
    }
}
