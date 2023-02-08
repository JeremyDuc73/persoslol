<?php

namespace Repositories;
use Attributes\Table;
use Attributes\TargetEntity;
use Entity\Perso;

#[TargetEntity(entityName: Perso::class)]
class PersoRepository extends AbstractRepository
{
    public function insert(Perso $perso){

        $query = $this->pdo->prepare("INSERT INTO {$this->tableName} SET name = :name, role = :role, lore = :lore, image = :image");
        $query->execute([
            "name"=>$perso->getName(),
            "role"=>$perso->getRole(),
            "lore"=>$perso->getLore(),
            "image"=>$perso->getImage()
        ]);
        return $this->pdo->lastInsertId();
    }
}