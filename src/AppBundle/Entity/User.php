<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use FiThnitekBundle\Entity\Event;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 *
 */
class User extends BaseUser implements \Serializable
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="string",length=255)
     */

    protected $prenom ;

    /**
     * @ORM\Column(type="integer")
     */

    protected $tel ;
    /**
     * @ORM\Column(type="string",length=255)
     */

    protected $image ;

    /**
     * @ORM\Column(type="date")
     */

    protected $datedenaissance ;
    /**
     * @ORM\Column(type="integer")
     */
    protected $nbroffre =0 ;
    /**
     * @ORM\Column(type="integer")
     */
    protected $points =0 ;
    /**
     * @ORM\Column(type="string",length=255)
     */
    protected $type ;






    public function __construct()
    {
        parent::__construct();



    }

    /**
     * @return string|null
     */
    public function getConfirmationToken()
    {
        return $this->confirmationToken;
    }

    /**
     * @param string|null $confirmationToken
     */
    public function setConfirmationToken($confirmationToken)
    {
        $this->confirmationToken = $confirmationToken;
    }

    /**
     * @return mixed
     */
    public function getDatedenaissance()
    {
        return $this->datedenaissance;
    }

    /**
     * @param mixed $datedenaissance
     */
    public function setDatedenaissance($datedenaissance)
    {
        $this->datedenaissance = $datedenaissance;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getPoints()
    {
       /* $now=new \DateTime();
        $naissance=$this->getDatedenaissance();
        $day=$naissance->format("d");
        $month=$naissance->format("m");
        $dayNow=$now->format("d");
        $monthNow=$now->format("m");


        if($day==$dayNow and $month==$monthNow)
        {
        $this->setPoints($this->points+20);
        }*/
        return $this->points;
    }

    /**
     * @param int $points
     */
    public function setPoints($points)
    {
        $this->points = $points;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getNbroffre()
    {
        return $this->nbroffre;
    }

    /**
     * @param mixed $nbroffre
     */
    public function setNbroffre($nbroffre)
    {
        $this->nbroffre = $nbroffre;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }






    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->prenom,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->prenom,

            ) = unserialize($serialized);
    }

}
