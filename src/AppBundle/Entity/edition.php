<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * edition
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class edition
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
     * @ORM\Column(name="edition", type="string", length=200)
     */
    private $edition;


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
     * Set eID
     *
     * @param integer $eID
     * @return edition
     */
    public function setEID($eID)
    {
        $this->eID = $eID;

        return $this;
    }

    /**
     * Get eID
     *
     * @return integer
     */
    public function getEID()
    {
        return $this->eID;
    }

    /**
     * Set edition
     *
     * @param string $edition
     * @return edition
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;

        return $this;
    }

    /**
     * Get edition
     *
     * @return string
     */
    public function getEdition()
    {
        return $this->edition;
    }
}
