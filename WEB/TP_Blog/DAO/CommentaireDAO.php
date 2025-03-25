<?php

class CommentaireDAO {

    public static function getCommentaireById($nbID) {

        $tableCom = DatabaseLinker::getConnexion();

        $recupCom = $tableCom->prepare("SELECT * FROM commentaire WHERE id = ?");
        $recupCom->execute(array($nbID));
        $resultat = $recupCom->fetch(PDO::FETCH_ASSOC);

        if ($resultat) {
            $objetCom = new CommentaireDTO();
            $objetCom->setPseudo($resultat["pseudo"]);
            $objetCom->setDateParution($resultat["date_parution"]);
            $objetCom->setContent($resultat["content"]);
            $objetCom->setArticleId($resultat["article_id"]);

            return $objetCom;
        } else {
            return null;
        }
    }

    public static function getCommentairesByIdArticle($nbIdArt) {

        $tableCom = DatabaseLinker::getConnexion();

        $recupCom = $tableCom->prepare("SELECT * FROM commentaire WHERE article_id = ?");
        $recupCom->execute(array($nbIdArt));

        $commentaires = array();
        while (($resultat = $recupCom->fetch(PDO::FETCH_ASSOC))) {
            $commentaire = new CommentaireDTO();
            $commentaire->setPseudo($resultat["pseudo"]);
            $commentaire->setDateParution($resultat["date_parution"]);
            $commentaire->setContent($resultat["content"]);
            $commentaire->setArticleId($resultat["article_id"]);
            $commentaires[] = $commentaire;
        }
        return $commentaires;
    }

    public static function insertCommentaire($commentaireDTO)
    {
        $connexBDD = DatabaseLinker::getConnexion();

        $inserCom = $connexBDD->prepare("INSERT INTO commentaire (pseudo, date_parution, content, article_id) VALUES (?, ?, ?, ?)");
        $inserCom->execute(array(
            $commentaireDTO->getPseudo(),
            $commentaireDTO->getDateParution(),
            $commentaireDTO->getContent(),
            $commentaireDTO->getArticleId()
        ));
    }
}
