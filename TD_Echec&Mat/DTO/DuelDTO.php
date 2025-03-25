<?php

class DuelDTO
{

    private $id;
    private $joueur_noir_id;
    private $joueur_blanc_id;
    private $victoire_joueur_noir;

    public function __construct(
        $joueur_noir_id,  
        $joueur_blanc_id,  
        $victoire_joueur_noir) {
            
        $this->joueur_noir_id = $joueur_noir_id;
        $this->joueur_blanc_id = $joueur_blanc_id;$this->victoire_joueur_noir = $victoire_joueur_noir;
    }

    public function getId() {
        return $this->id;
    }

    public function getJoueurNoirId() {
        return $this->joueur_noir_id;
    }

    public function getJoueurBlancId() {
        return $this->joueur_blanc_id;
    }

    public function isVictoireJoueurNoir() {
        return $this->victoire_joueur_noir;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setJoueurNoirId($joueur_noir_id) {
        $this->joueur_noir_id = $joueur_noir_id;
    }

    public function setJoueurBlancId($joueur_blanc_id) {
        $this->joueur_blanc_id = $joueur_blanc_id;
    }

    public function setVictoireJoueurNoir($victoire_joueur_noir) {
        $this->victoire_joueur_noir = $victoire_joueur_noir;
    }
}
