<?php

namespace Entity;

use Attributes\Table;
use Attributes\TargetRepository;
use Repositories\PersoRepository;

#[Table(name: "persos")]
#[TargetRepository(repositoryName: PersoRepository::class)]
class Perso extends AbstractEntity
{
    private int $id;
    private string $name;
    private string $image;
    private string $lore;
    private string $role;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getLore(): string
    {
        return $this->lore;
    }

    /**
     * @param string $lore
     */
    public function setLore(string $lore): void
    {
        $this->lore = $lore;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole(string $role): void
    {
        $this->role = $role;
    }

}