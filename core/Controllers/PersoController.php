<?php

namespace Controllers;
use App\File;
use Attributes\DefaultEntity;
use Entity\Perso;

#[DefaultEntity(entityName: Perso::class)]
class PersoController extends AbstractController
{
    public function index(){

        $persos = $this->repository->findAll("name");

        return $this->render("persos/index", [
            "pageTitle"=>"les personnages",
            "persos"=>$persos
        ]);
    }

    public function show(){

        $id = null;

        if(!empty($_GET['id']) && ctype_digit($_GET["id"])){
            $id = $_GET['id'];
        }

        if(!$id){ return $this->redirect(); }

        $perso = $this->repository->findById($id);

        if(!$perso){return $this->redirect(); }

        return $this->render("persos/show", [
            "pageTitle"=> $perso->getName(),
            "perso"=>$perso
        ]);
    }

    public function create(){

        $name = null;
        $role = null;
        $lore = null;

        if (!empty($_POST['name'])){
            $name = htmlspecialchars($_POST['name']);
        }
        if (!empty($_POST['role'])){
            $role = htmlspecialchars($_POST['role']);
        }
        if (!empty($_POST['lore'])){
            $lore = htmlspecialchars($_POST['lore']);
        }

        if ($name && $role && $lore){
            $image = new File("imagePerso");
            if ($image->isImage()){
                $image->upload();
            }

            $perso = new Perso();
            $perso->setName($name);
            $perso->setRole($role);
            $perso->setLore($lore);
            $perso->setImage($image->getName());

            $idPerso = $this->repository->insert($perso);

            return $this->redirect([
                "type"=>"perso",
                "action"=>"show",
                "id"=>$idPerso
            ]);
        }

        return $this->render("persos/create", [
            "pageTitle"=>"Ajouter un personnage"
        ]);

    }

    public function remove(){
        $id = null;

        if(!empty($_GET['id']) && ctype_digit($_GET["id"])){
            $id = $_GET['id'];
        }

        if(!$id){ return $this->redirect(); }

        $perso = $this->repository->findById($id);

        if(!$perso){return $this->redirect(); }

        $this->repository->delete($perso);

        return $this->redirect();
    }
}