<?php

namespace Projet\Symfony2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * pointage
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class pointage
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
     * @ORM\Column(name="code", type="string", length=50)
     */
    private $code;
	 /**
     * @var string
     *
     * @ORM\Column(name="pointage", type="string", length=50)
     */
    private $pointage;

   

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=50)
     */
    private $date;


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
     * @return pointage
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
     * Set date
     *
     * @param string $date
     *
     * @return pointage
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set pointage
     *
     * @param string $pointage
     *
     * @return pointage
     */
    public function setPointage($pointage)
    {
        $this->pointage = $pointage;

        return $this;
    }

    /**
     * Get pointage
     *
     * @return string
     */
    public function getPointage()
    {
        return $this->pointage;
    }
}
