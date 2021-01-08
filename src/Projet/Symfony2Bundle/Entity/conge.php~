<?php

namespace Projet\Symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * conge
 *
 * @ORM\Table(name="conge")
 * @ORM\Entity
 */
class conge
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="personnel", type="string", length=50)
     */
    private $personnel;
	
	/**
     * @var string
     *
     * @ORM\Column(name="cause", type="text",nullable=true)
     */
    private $cause;
	
	 /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=50,nullable=true)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut", type="string",length=50)
     */
    private $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="date_fin", type="string",length=50)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="date_depot", type="string")
     */
    private $dateDepot;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50)
     */
    private $type;


   

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set personnel
     *
     * @param string $personnel
     *
     * @return conge
     */
    public function setPersonnel($personnel)
    {
        $this->personnel = $personnel;

        return $this;
    }

    /**
     * Get personnel
     *
     * @return string
     */
    public function getPersonnel()
    {
        return $this->personnel;
    }

    /**
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return conge
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return string
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param string $dateFin
     *
     * @return conge
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return string
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set dateDepot
     *
     * @param string $dateDepot
     *
     * @return conge
     */
    public function setDateDepot($dateDepot)
    {
        $this->dateDepot = $dateDepot;

        return $this;
    }

    /**
     * Get dateDepot
     *
     * @return string
     */
    public function getDateDepot()
    {
        return $this->dateDepot;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return conge
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return conge
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set cause
     *
     * @param string $cause
     *
     * @return conge
     */
    public function setCause($cause)
    {
        $this->cause = $cause;

        return $this;
    }

    /**
     * Get cause
     *
     * @return string
     */
    public function getCause()
    {
        return $this->cause;
    }
}
