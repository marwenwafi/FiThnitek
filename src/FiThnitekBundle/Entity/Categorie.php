<?php
// src/AppBundle/Entity/User.php

namespace FiThnitekBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCategorie;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $description;


    /**
     * @ORM\Column(type="string",length=255)
     */
    private $typeCategorie;

    /**
     * @return mixed
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * @param mixed $idCategorie
     */
    public function setIdCategorie($idCategorie)
    {
        $this->idCategorie = $idCategorie;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getTypeCategorie()
    {
        return $this->typeCategorie;
    }

    /**
     * @param mixed $typeCategorie
     */
    public function setTypeCategorie($typeCategorie)
    {
        $this->typeCategorie = $typeCategorie;
    }



}
