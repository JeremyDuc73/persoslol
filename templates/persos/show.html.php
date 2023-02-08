    <hr>
    <h3><?= $perso->getName() ?></h3>
    <h5><?= $perso->getRole() ?></h5>
    <image width="600px" src="images/<?= $perso->getImage() ?>">
    <p><?= $perso->getLore()?></p>
    <hr>
    <a href="index.php" class="btn btn-primary">RETOUR</a>
    <a href="?type=perso&action=remove&id=<?=$perso->getId()?>" class="btn btn-danger">SUPPRIMER</a>