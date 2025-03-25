<?php

class ArticleDTO
{

    private $id;
    private $titre;
    private $date_parution;
    private $content;

    public function getId()
    {
        return $this->id;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getDateParution()
    {
        return $this->date_parution;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setDateParution($date_parution)
    {
        $this->date_parution = $date_parution;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }
}
