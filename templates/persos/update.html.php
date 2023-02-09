<form action="?type=perso&action=change" method="post">
    <input type="hidden" name="idUpdate" value="<?= $perso->getId()?>">
    <input type="text" name="nameUpdate" value="<?= $perso->getName() ?>">
    <input type="text" name="roleUpdate" value="<?= $perso->getRole() ?>">
    <input type="text" name="loreUpdate" value="<?= $perso->getLore() ?>">
    <button type="submit" class="btn btn-success">update</button>

</form>
