<?php

session_start();

include_once "tools/DatabaseLinker.php";
include_once "DTO/ArticleDTO.php";
include_once "DTO/CommentaireDTO.php";
include_once "DAO/CommentaireDAO.php";
include_once "DAO/ArticleDAO.php";

if (isset($_POST["pseudo"], $_POST["content"], $_POST["article_id"])) {
    $commentaireDTO = new CommentaireDTO();
    $commentaireDTO->setPseudo($_POST["pseudo"]);
    $commentaireDTO->setContent($_POST["content"]);
    $commentaireDTO->setArticleId($_POST["article_id"]);
    $commentaireDTO->setDateParution(date('Y-m-d H:i:s'));
    CommentaireDAO::insertCommentaire($commentaireDTO);

    header("Location: index.php#article" . $_POST["article_id"]);
    exit();
}

$articles = ArticleDAO::getArticles();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP_FireBlog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header class="text-center my-5">
            <h1>Bienvenue sur FireBlog</h1>
            <p>Ce TP a été réalisé dans le cadre de mon apprentissage pour le BTS SIO.</p>
            <?php
            if (empty($_SESSION["login"])) { 
                echo '<p><a href="login.php">Vous avez un compte administrateur ?</a></p>';
            } else {
                echo '<p><a href="dashboard.php">Dashboard</a></p>';
            }
            ?>
        </header>

        <div class="articles-container">
            <?php foreach ($articles as $article) { ?>
                <div class="article-card" id="article<?php echo $article->getId(); ?>">
                    <h2><?php echo $article->getTitre(); ?></h2>
                    <p class="text-muted">Publié le :
                        <?php echo date("d/m/Y H:i:s", strtotime($article->getDateParution())); ?>
                    </p>
                    <p><?php echo $article->getContent(); ?></p>

                    <hr>

                    <h5><strong>Commentaires :</strong></h5>
                    <?php
                    $commentaires = CommentaireDAO::getCommentairesByIdArticle($article->getId());
                    if (count($commentaires) > 0) {
                        echo "<ul class='list-group'>";
                        foreach ($commentaires as $commentaire) {
                            echo "<li class='list-group-item'><strong>" . $commentaire->getPseudo() . " :</strong> " . $commentaire->getContent() .
                                "<br><span style='font-style: italic; opacity: 0.7;'>" . date("d/m/Y H:i:s", strtotime($article->getDateParution())) . "</span></li>";
                        }
                        echo "</ul>";
                    } else {
                        echo "<p class='text-muted'>Aucun commentaire pour cet article.</p>";
                    }
                    ?>

                    <hr>

                    <div class="comment-form">
                        <form method="POST" action="index.php#article<?php echo $article->getId(); ?>">
                            <div class="mb-3">
                                <label class="form-label">Pseudo</label>
                                <input type="text" class="form-control" name="pseudo" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" name="content" required></textarea>
                            </div>
                            <input type="hidden" name="article_id" value="<?php echo $article->getId(); ?>">
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>