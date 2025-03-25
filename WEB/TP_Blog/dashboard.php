<?php
session_start();

if (empty($_SESSION["login"])) {
    header('Location: index.php');
    exit;
}

if (isset($_POST['logout'])) {
    include_once 'DTO/UserDTO.php';
    include_once 'DAO/UserDAO.php';
    UserDAO::getDeconnexion();
}

if (isset($_POST['submit_article'])) {
    include_once "tools/DatabaseLinker.php";
    include_once 'DTO/ArticleDTO.php';
    include_once 'DAO/ArticleDAO.php';

    $titre = htmlspecialchars($_POST['titre']);
    $content = htmlspecialchars($_POST['content']);
    $date_parution = date("Y-m-d H:i:s");

    $article = new ArticleDTO();
    $article->setTitre($titre);
    $article->setContent($content);
    $article->setDateParution($date_parution);

    ArticleDAO::insertArticle($article);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico" />
    <link rel="stylesheet" href="dashboardStyle.css">
    <title>Page admin</title>
</head>

<body>
    <div class="container">
        <div class="admin-box">
            <h1>Page d'administration</h1>
            <form method="POST">
                <button type="submit" name="logout" class="logout-button">Déconnexion</button>
            </form>

            <h2>Ajouter un nouvel article</h2>
            <form method="POST">
                <label for="titre">Titre :</label>
                <input type="text" id="titre" name="titre" required>

                <label for="content">Contenu :</label>
                <textarea id="content" name="content" rows="5" required></textarea>

                <button type="submit" name="submit_article" class="submit-button">Soumettre l'article</button>
            </form>
        </div>
    </div>
</body>

</html>