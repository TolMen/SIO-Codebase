<?php

/*
- Inclusion de fichier nécessaire
*/
require_once '../../control/BDDControl/connectBDD.php'; 

/*
- Classe pour gérer les opérations du formulaire de contact
*/
class ContactModel {

    /*
    - Cette fonction insert les informations du formulaire
    */
    public function insertContact(PDO $bdd, $firstName, $name, $email, $message) {
        $insertContact = $bdd->prepare('INSERT INTO formcontacts(firstName, name, email, message) VALUES(?, ?, ?, ?)');
        return $insertContact->execute([$firstName, $name, $email, $message]);
    }
}