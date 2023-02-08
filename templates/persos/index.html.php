<?php foreach ($persos as $perso) : ?>

    <hr>
    <h2><?=$perso->getName() ?></h2>
    <h3><?= $perso->getRole() ?></h3>
    <img width="400px" src="images/<?= $perso->getImage() ?>" alt="">

    <p><strong><?= $perso->getLore() ?></strong></p>
    <a href="?type=perso&action=show&id=<?= $perso->getId() ?>" class="btn btn-primary">Voir</a>
    <hr>


<?php endforeach; ?>