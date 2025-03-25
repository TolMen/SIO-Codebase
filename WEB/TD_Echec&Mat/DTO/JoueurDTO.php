<?php

class JoueurDTO
{

    private $id;
    private $nom;
    private $prenom;

    public function __construct($nom,  $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setId( $id) {
        $this->id = $id;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }
}
