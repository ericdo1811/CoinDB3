<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * storage
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class storage
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
     * @ORM\Column(name="aufbewahrung", type="string", length=255)
     */
    private $aufbewahrung;


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
     * Set aufbID
     *
     * @param integer $aufbID
     * @return storage
     */
    public function setAufbID($aufbID)
    {
        $this->aufbID = $aufbID;

        return $this;
    }

    /**
     * Get aufbID
     *
     * @return integer
     */
    public function getAufbID()
    {
        return $this->aufbID;
    }

    /**
     * Set aufbewahrung
     *
     * @param string $aufbewahrung
     * @return storage
     */
    public function setAufbewahrung($aufbewahrung)
    {
        $this->aufbewahrung = $aufbewahrung;

        return $this;
    }

    /**
     * Get aufbewahrung
     *
     * @return string
     */
    public function getAufbewahrung()
    {
        return $this->aufbewahrung;
    }
}
