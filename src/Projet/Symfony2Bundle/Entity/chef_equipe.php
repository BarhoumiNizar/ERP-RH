<?php

namespace Projet\Symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * personnesl
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class chef_equipe
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
     * @ORM\Column(name="code", type="string", length=50,unique=true)
     */
    private $code;

    
 
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
     * Set code
     *
     * @param string $code
     *
     * @return personnesl
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

    
}
