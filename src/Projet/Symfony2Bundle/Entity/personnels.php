<?php

namespace Projet\Symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * personnesl
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class personnels
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
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="profil", type="string", length=50)
     */
    private $profil;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=50,unique=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=50)
     */
    private $mdp;
 /**
     * @var string
     *
     * @ORM\Column(name="manager",nullable=true,type="string", length=50)
     */
    private $manager;
 


	/**
     * @var string
     *
     * @ORM\Column(name="annee_entree", type="string", length=50)
     */
    private $annee_entree;
		/**
     * @var string
     *
     * @ORM\Column(name="jour_entree", type="string", length=50)
     */
    private $jour_entree;
		/**
     * @var string
     *
     * @ORM\Column(name="mois_entree", type="string", length=50)
     */
    private $mois_entree;

    

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
     * Set nom
     *
     * @param string $nom
     *
     * @return personnels
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return personnels
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set profil
     *
     * @param string $profil
     *
     * @return personnels
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get profil
     *
     * @return string
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return personnels
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     *
     * @return personnels
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    
   

    /**
     * Set anneeEntree
     *
     * @param string $anneeEntree
     *
     * @return personnels
     */
    public function setAnneeEntree($anneeEntree)
    {
        $this->annee_entree = $anneeEntree;

        return $this;
    }

    /**
     * Get anneeEntree
     *
     * @return string
     */
    public function getAnneeEntree()
    {
        return $this->annee_entree;
    }

    /**
     * Set jourEntree
     *
     * @param string $jourEntree
     *
     * @return personnels
     */
    public function setJourEntree($jourEntree)
    {
        $this->jour_entree = $jourEntree;

        return $this;
    }

    /**
     * Get jourEntree
     *
     * @return string
     */
    public function getJourEntree()
    {
        return $this->jour_entree;
    }

    /**
     * Set moisEntree
     *
     * @param string $moisEntree
     *
     * @return personnels
     */
    public function setMoisEntree($moisEntree)
    {
        $this->mois_entree = $moisEntree;

        return $this;
    }

    /**
     * Get moisEntree
     *
     * @return string
     */
    public function getMoisEntree()
    {
        return $this->mois_entree;
    }

    /**
     * Set manager
     *
     * @param string $manager
     *
     * @return personnels
     */
    public function setManager($manager)
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * Get manager
     *
     * @return string
     */
    public function getManager()
    {
        return $this->manager;
    }
}
