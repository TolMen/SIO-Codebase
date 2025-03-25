<?php

class ArticleDAO
{

    public static function getArticleById($nbID)
    {

        $tableArt = DatabaseLinker::getConnexion();

        $recupArt = $tableArt->prepare("SELECT * FROM article WHERE id = ?");
        $recupArt->execute(array($nbID));
        $resultat = $recupArt->fetch(PDO::FETCH_ASSOC);

        if ($resultat) {
            $objetArt = new ArticleDTO();
            $objetArt->setId($resultat["id"]);
            $objetArt->setTitre($resultat["titre"]);
            $objetArt->setDateParution($resultat["date_parution"]);
            $objetArt->setContent($resultat["content"]);
            return $objetArt;
        } else {
            return null;
        }
    }

    public static function getArticles()
    {
        $tableArt = DatabaseLinker::getConnexion();

        $recupArt = $tableArt->prepare("SELECT * FROM article ORDER BY date_parution DESC");
        $recupArt->execute();

        $resultat = $recupArt->fetchAll(PDO::FETCH_ASSOC);

        $articles = array();
        foreach ($resultat as $articleData) {
            $art = new ArticleDTO();
            $art->setId($articleData["id"]);
            $art->setTitre($articleData["titre"]);
            $art->setDateParution($articleData["date_parution"]);
            $art->setContent($articleData["content"]);
            $articles[] = $art;

        }
        return $articles;
    }

    public static function insertArticle($article)
    {
        $tableArt = DatabaseLinker::getConnexion();

        $insertArt = $tableArt->prepare("INSERT INTO article (titre, date_parution, content) VALUES (?, ?, ?)");
        $insertArt->execute(array($article->getTitre(), $article->getDateParution(), $article->getContent()));

        if ($insertArt) {
            header('Location: index.php');
            exit;
        }
    }
}
