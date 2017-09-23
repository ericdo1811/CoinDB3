<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ver_sto_mu
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ver_sto_mu
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
     * @ORM\Column(name="Aufb_ID", type="integer")
     */
    private $aufbID;

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
     * Set vaufbID
     *
     * @param integer $vaufbID
     * @return ver_sto_mu
     */
    public function setVaufbID($vaufbID)
    {
        $this->vaufbID = $vaufbID;

        return $this;
    }

    /**
     * Get vaufbID
     *
     * @return integer
     */
    public function getVaufbID()
    {
        return $this->vaufbID;
    }

    /**
     * Set aufbID
     *
     * @param integer $aufbID
     * @return ver_sto_mu
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
     * Set mID
     *
     * @param integer $mID
     * @return ver_sto_mu
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
