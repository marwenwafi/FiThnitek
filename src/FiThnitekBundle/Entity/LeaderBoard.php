<?php
// src/AppBundle/Entity/User.php

namespace FiThnitekBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="LeaderBoard")
 */
class LeaderBoard
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idleaderboard;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $taille;

    /**
     * @ORM\Column(type="date")
     */
    private $periode;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="idadmin", referencedColumnName="id")
     */
    private $categ;

    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinTable(name="leaderboard_users",
     *      joinColumns={@ORM\JoinColumn(name="idleaderb", referencedColumnName="idleaderboard")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="iduser", referencedColumnName="id")}
     *      )
     */
    private $utilisateurs;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="idadmin", referencedColumnName="id")
     */
    private $admin;

    /**
     * LeaderBoard constructor.
     */
    public function __construct()
    {
        $this->utilisateurs = new ArrayCollection();
    }


    /**
     * @return mixed
     */
    public function getIdLeaderBoard()
    {
        return $this->idLeaderBoard;
    }

    /**
     * @param mixed $idLeaderBoard
     */
    public function setIdLeaderBoard($idLeaderBoard)
    {
        $this->idLeaderBoard = $idLeaderBoard;
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
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @param mixed $taille
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    }

    /**
     * @return mixed
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * @param mixed $periode
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;
    }

    /**
     * @return mixed
     */
    public function getCateg()
    {
        return $this->categ;
    }

    /**
     * @param mixed $categ
     */
    public function setCateg($categ)
    {
        $this->categ = $categ;
    }

    /**
     * @return ArrayCollection
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }

    /**
     * @param ArrayCollection $utilisateurs
     */
    public function setUtilisateurs($utilisateurs)
    {
        $this->utilisateurs = $utilisateurs;
    }

    /**
     * @return mixed
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }



}
