<?php

class CommentaireDTO {

    private $pseudo;
    private $date_parution;
    private $content;
    private $article_id;

    public function getPseudo() {
        return $this->pseudo;
    }

    public function getDateParution() {
        return $this->date_parution;
    }

    public function getContent() {
        return $this->content;
    }

    public function getArticleId() {
        return $this->article_id;
    }

    public function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
    }

    public function setDateParution($date_parution) {
        $this->date_parution = $date_parution;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function setArticleId($article_id) {
        $this->article_id = $article_id;
    }
}
