<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * orders
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class orders
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
     * @var \DateTime
     *
     * @ORM\Column(name="datum", type="date")
     */
    private $datum;

    /**
     * @var integer
     *
     * @ORM\Column(name="menge", type="integer")
     */
    private $menge;

    /**
     * @var integer
     *
     * @ORM\Column(name="m_ID", type="integer")
     */
    private $mID;


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
     * Set bID
     *
     * @param integer $bID
     * @return orders
     */
    public function setBID($bID)
    {
        $this->bID = $bID;

        return $this;
    }

    /**
     * Get bID
     *
     * @return integer
     */
    public function getBID()
    {
        return $this->bID;
    }

    /**
     * Set datum
     *
     * @param \DateTime $datum
     * @return orders
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Get datum
     *
     * @return \DateTime
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Set menge
     *
     * @param integer $menge
     * @return orders
     */
    public function setMenge($menge)
    {
        $this->menge = $menge;

        return $this;
    }

    /**
     * Get menge
     *
     * @return integer
     */
    public function getMenge()
    {
        return $this->menge;
    }

    /**
     * Set mID
     *
     * @param integer $mID
     * @return orders
     */
    public function setMID($mID)
    {
        $this->mID = $mID;

        return $this;
    }

    /**
     * Get mID
     *
     * @return integer
     */
    public function getMID()
    {
        return $this->mID;
    }
}
