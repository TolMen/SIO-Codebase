<?php

/* 
- Inclusion des fichiers nécessaire
*/
require_once '../../model/ContactModel/contactFormModel.php';
require_once '../../model/ContactModel/contentContactModelGenerator.php';
require_once '../../model/LogModel/logWriteModel.php';
require_once '../../model/ContactModel/contactSecurityModel.php';

/*
- Vérifie si le formulaire est soumis, puis si les champs sont complets
*/
if (isset($_POST['envoi'])) {
    if (!empty($_POST['firstName']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']) && isset($_POST['check'])) {

        /*
        - Sécurisation des données
        */
        $firstName = htmlspecialchars($_POST['firstName']);
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        /*
        - Nouvelle instance de la classe de sécurité
        */
        $securityContact = new SecurityFormContact();

        /*
        - Appel de la fonction de vérification
        */
        $errorsSecurContact = $securityContact->checkSecurityContact($firstName, $name, $email, $message);

        /*
        - Si variables errors vide, on crée une instance du modèle de la classe
        */
        if (empty($errorsSecurContact)) {
            $contactModel = new ContactModel();
            
            /*
            - Appel la fonction pour insérer les données dans la BDD
            */
            if ($contactModel->insertContact($bdd, $firstName, $name, $email, $message)) {
    
                /*
                - Appel la fonction pour générer l'organisation des données dans un modèle
                */
                $fileContent = ContactContentGenerator::generateContactContent($firstName, $name, $email, $message);
                
                /*
                - Écrit le contenu généré dans le fichier en prenant le chemin dans la variable
                */
                $filePath = '../../../LogFiles/listContentContact.txt';
                file_put_contents($filePath, $fileContent, FILE_APPEND | LOCK_EX);
    
                /*
                - Redirection vers la page d'accueil des visiteurs
                */
                header('Location: ../../../contact.php');
                throw new Exception("Redirection vers la page actuel des visiteurs");
            } else {
                echo 'Erreur lors de l\'insertion des données.';
            }
        } else {
            echo '$errorsSecurContact';
        }
    } else {
        /*
        - Si échecs, redirection vers une page d'erreur
        */
        header('Location: ###');
        throw new Exception("Redirection vers une page d'erreur");
    }
}