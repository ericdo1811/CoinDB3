<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * coinprice
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class coinprice
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
     * @var float
     *
     * @ORM\Column(name="wert", type="float")
     */
    private $wert;


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
     * Set gwID
     *
     * @param integer $gwID
     * @return coinprice
     */
    public function setGwID($gwID)
    {
        $this->gwID = $gwID;

        return $this;
    }

    /**
     * Get gwID
     *
     * @return integer
     */
    public function getGwID()
    {
        return $this->gwID;
    }

    /**
     * Set wert
     *
     * @param float $wert
     * @return coinprice
     */
    public function setWert($wert)
    {
        $this->wert = $wert;

        return $this;
    }

    /**
     * Get wert
     *
     * @return float
     */
    public function getWert()
    {
        return $this->wert;
    }
}
