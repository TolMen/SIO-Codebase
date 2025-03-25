<?php
include_once("tools/DatabaseLinker.php");
include_once("DTO/JoueurDTO.php");
include_once("DTO/DuelDTO.php");
include_once("DAO/DuelDAO.php");
include_once("DAO/JoueurDAO.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/icons.css" media="all">
    <link rel="icon" type="image/svg" href="images/favicon.svg">
    <meta charset="utf-8">
    <title>Echec et mat</title>
</head>

<body>


    <main class="container">
        <div class="row justify-content-center">
            <section class="col-7">
                <h2>Nouveau joueur</h2>
                <form method="POST" action="createJoueur.php">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom">
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom">
                    <button class="btn btn-success" type="validate"><i class="icon icon-add"></i>Ajouter</button>
                </form>
                <hr>
                <h2>Nouveau duel</h2>
                <form method="POST" action="createDuel.php">
                    <label for="pionNoir">Pion noir :</label>
                    <select name="pionNoir" id="pionNoir">
                        <?php

                        $tabJoueurs = JoueurDAO::getJoueurs();
                        if (sizeof($tabJoueurs) == 0) {
                            echo 'Aucun joueur enregistré.';
                        } else {
                            foreach ($tabJoueurs as $joueur) {
                                ?>
                                <option value="<?php echo $joueur->getId(); ?>">
                                    <?php echo $joueur->getNom() . " " . $joueur->getPrenom(); ?>
                                </option>
                                <?php
                            }
                        }
                        ?>
                    </select>

                    <br>

                    <label for="pionBlanc">Pion blanc :</label>
                    <select name="pionBlanc" id="pionBlanc">
                        <?php

                        $tabJoueurs = JoueurDAO::getJoueurs();
                        if (sizeof($tabJoueurs) == 0) {
                            echo 'Aucun joueur enregistré.';
                        } else {
                            foreach ($tabJoueurs as $joueur) {
                                ?>
                                <option value="<?php echo $joueur->getId(); ?>">
                                    <?php echo $joueur->getNom() . " " . $joueur->getPrenom(); ?>
                                </option>
                                <?php
                            }
                        }
                        ?>
                    </select>

                    <br>

                    <label for="victoirePionNoir">Victoire des pion noir :</label>
                    <select name="victoirePionNoir" id="victoirePionNoir">
                        <option value="1">OUI</option>
                        <option value="0">NON</option>
                    </select>

                    <br>

                    <button class="btn btn-success" type="validate"><i class="icon icon-add"></i>Ajouter</button>
                </form>
            </section>
        </div>
        <div class="row justify-content-center">
            <section class="col-7 mt-2">
                <h2>Liste des joueurs</h2>
                <?php

                $tabJoueurs = JoueurDAO::getJoueurs();
                if (sizeof($tabJoueurs) == 0) {
                    echo 'Aucun joueur enregistré.';
                } else {
                    foreach ($tabJoueurs as $joueur) {
                        ?>
                        <form method="POST" action="updateJoueur.php">
                            <input type="hidden" name="id" value="<?php echo $joueur->getId(); ?>">

                            <input type="text" class="my-2" name="nom" placeholder="NOM"
                                value="<?php echo $joueur->getNom(); ?>">
                            <input type="text" class="my-2" name="prenom" placeholder="Prénom"
                                value="<?php echo $joueur->getPrenom(); ?>">
                            <button class="btn btn-primary my-2" type="submit"><i
                                    class="icon icon-edit"></i><span>Modifier</span></button>
                            <a class="btn btn-danger my-2" href="deleteJoueur.php?id=<?php echo $joueur->getId(); ?>">
                                <i class="icon icon-delete"></i><span>Supprimer</span>
                            </a>
                        </form>
                        <?php
                    }
                }
                ?>

            </section>
        </div>
        <div class="row justify-content-center">
            <section class="col-7 mt-2">
                <h2>Liste des duels</h2>
                <?php

                $tabDuels = DuelDAO::getDuels();

                $cptDuel = 1;
                if (sizeof($tabDuels) == 0) {
                    echo 'Aucun duel enregistré.';
                } else {
                    foreach ($tabDuels as $duel) {
                        $joueur1 = JoueurDAO::getJoueurById($duel->getJoueurNoirId());
                        $joueur2 = JoueurDAO::getJoueurById($duel->getJoueurBlancId());

                        if ($duel->isVictoireJoueurNoir()) {
                            $joueurGagnant = JoueurDAO::getJoueurById($duel->getJoueurNoirId());
                        } else {
                            $joueurGagnant = JoueurDAO::getJoueurById($duel->getJoueurBlancId());
                        }
                        ?>
                        <div class="mb-3">
                            <h5>Duel n° <?php echo $cptDuel; ?>
                                <a class="btn btn-danger" href="deleteDuel.php?id=<?php echo $duel->getId(); ?>">
                                    <i class="icon icon-delete"></i><span>Supprimer</span>
                                </a>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Modifier
                                </button>
                            </h5>
                            <span><?php echo $joueur1->getNom() . " " . $joueur1->getPrenom(); ?></span>
                            <span class="fw-bold">VS</span>
                            <span><?php echo $joueur2->getNom() . " " . $joueur2->getPrenom(); ?></span>
                            <div>
                                <label>Gagnant : </label>
                                <span
                                    class="fw-bold"><?php echo $joueurGagnant->getNom() . " " . $joueurGagnant->getPrenom(); ?></span>
                            </div>
                        </div>

                        <?php
                        $cptDuel++;
                    }
                }

                ?>
            </section>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modification duel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary">Sauvegarder</button>
                    </div>
                </div>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>


</body>

</html>