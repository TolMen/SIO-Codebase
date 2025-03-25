<?php

class SecurityFormContact {

    public function checkSecurityContact($firstName, $name, $email, $message) {

        $errorsSecurContact = [];

        if (strlen($firstName) > 26) {
            $errorsSecurContact[] = 'Le prénom ne doit pas dépasser 26 caractères.';
        }
        if (strlen($name) > 30) {
            $errorsSecurContact[] = 'Le nom ne doit pas dépasser 30 caractères.';
        }
        if (strlen($message) > 1000) {
            $errorsSecurContact[] = 'Le message ne doit pas dépasser 1000 caractères.';
        }

        if (!preg_match('/^[A-Za-zÀ-ÿ\- ]+$/', $firstName)) {
            $errorsSecurContact[] = 'Le prénom ne doit contenir que des lettres, des espaces ou des tirets.';
        }
        if (!preg_match('/^[A-Za-zÀ-ÿ\- ]+$/', $name)) {
            $errorsSecurContact[] = 'Le nom ne doit contenir que des lettres, des espaces ou des tirets.';
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorsSecurContact[] = 'L\'adresse e-mail est invalide.';
        }

        return $errorsSecurContact;
    }
}
