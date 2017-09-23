<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * country
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class country
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
     * @ORM\Column(name="land", type="string", length=100)
     */
    private $land;


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
     * Set lID
     *
     * @param integer $lID
     * @return country
     */
    public function setLID($lID)
    {
        $this->lID = $lID;

        return $this;
    }

    /**
     * Get lID
     *
     * @return integer
     */
    public function getLID()
    {
        return $this->lID;
    }

    /**
     * Set land
     *
     * @param string $land
     * @return country
     */
    public function setLand($land)
    {
        $this->land = $land;

        return $this;
    }

    /**
     * Get land
     *
     * @return string
     */
    public function getLand()
    {
        return $this->land;
    }
}
