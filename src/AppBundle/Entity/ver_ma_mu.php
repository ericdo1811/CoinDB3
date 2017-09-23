<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ver_ma_mu
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ver_ma_mu
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
     * @ORM\Column(name="m_ID", type="integer")
     */
    private $mID;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ma_ID", type="integer")
     */
    private $maID;


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
     * Set vmaMuID
     *
     * @param integer $vmaMuID
     * @return ver_ma_mu
     */
    public function setVmaMuID($vmaMuID)
    {
        $this->vmaMuID = $vmaMuID;

        return $this;
    }

    /**
     * Get vmaMuID
     *
     * @return integer
     */
    public function getVmaMuID()
    {
        return $this->vmaMuID;
    }

    /**
     * Set mID
     *
     * @param integer $mID
     * @return ver_ma_mu
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

    /**
     * Set maID
     *
     * @param integer $maID
     * @return ver_ma_mu
     */
    public function setMaID($maID)
    {
        $this->maID = $maID;

        return $this;
    }

    /**
     * Get maID
     *
     * @return integer
     */
    public function getMaID()
    {
        return $this->maID;
    }
}
