<?php

namespace Projet\Symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * employe
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class employe
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
     * @var integer
     *
     * @ORM\Column(name="employe", type="integer")
     */
    private $employe;

    /**
     *
     * @ORM\ManyToOne(targetEntity="chef_equipe")
     */
    private $chefEquip;


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
     * Set employe
     *
     * @param integer $employe
     *
     * @return employe
     */
    public function setEmploye($employe)
    {
        $this->employe = $employe;

        return $this;
    }

    /**
     * Get employe
     *
     * @return integer
     */
    public function getEmploye()
    {
        return $this->employe;
    }

    

    /**
     * Set chefEquip
     *
     * @param \Projet\Symfony2Bundle\Entity\chef_equipe $chefEquip
     *
     * @return employe
     */
    public function setChefEquip(\Projet\Symfony2Bundle\Entity\chef_equipe $chefEquip = null)
    {
        $this->chefEquip = $chefEquip;

        return $this;
    }

    /**
     * Get chefEquip
     *
     * @return \Projet\Symfony2Bundle\Entity\chef_equipe
     */
    public function getChefEquip()
    {
        return $this->chefEquip;
    }
}
