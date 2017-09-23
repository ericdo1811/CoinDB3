<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * coin
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class coin
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
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="wert", type="float")
     */
    private $wert;

    /**
     * @var float
     *
     * @ORM\Column(name="preis", type="float")
     */
    private $preis;

    /**
     * @var integer
     *
     * @ORM\Column(name="Aufb_ID", type="integer")
     */
    private $aufbID;

    /**
     * @var string
     *
     * @ORM\Column(name="besonderheiten", type="string", length=255)
     */
    private $besonderheiten;

    /**
     * @var integer
     *
     * @ORM\Column(name="jahr", type="integer")
     */
    private $jahr;

    /**
     * @var string
     *
     * @ORM\Column(name="geschichte", type="string", length=255)
     */
    private $geschichte;

    /**
     * @var string
     *
     * @ORM\Column(name="motiv", type="string", length=100)
     */
    private $motiv;

    /**
     * @var integer
     *
     * @ORM\Column(name="L_ID", type="integer")
     */
    private $lID;

    /**
     * @var integer
     *
     * @ORM\Column(name="E_ID", type="integer")
     */
    private $eID;

    /**
     * @var integer
     *
     * @ORM\Column(name="Gw_ID", type="integer")
     */
    private $gwID;


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
     * Set mID
     *
     * @param integer $mID
     * @return coin
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
     * Set name
     *
     * @param string $name
     * @return coin
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set wert
     *
     * @param float $wert
     * @return coin
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

    /**
     * Set preis
     *
     * @param float $preis
     * @return coin
     */
    public function setPreis($preis)
    {
        $this->preis = $preis;

        return $this;
    }

    /**
     * Get preis
     *
     * @return float
     */
    public function getPreis()
    {
        return $this->preis;
    }

    /**
     * Set aufbID
     *
     * @param integer $aufbID
     * @return coin
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
     * Set besonderheiten
     *
     * @param string $besonderheiten
     * @return coin
     */
    public function setBesonderheiten($besonderheiten)
    {
        $this->besonderheiten = $besonderheiten;

        return $this;
    }

    /**
     * Get besonderheiten
     *
     * @return string
     */
    public function getBesonderheiten()
    {
        return $this->besonderheiten;
    }

    /**
     * Set jahr
     *
     * @param integer $jahr
     * @return coin
     */
    public function setJahr($jahr)
    {
        $this->jahr = $jahr;

        return $this;
    }

    /**
     * Get jahr
     *
     * @return integer
     */
    public function getJahr()
    {
        return $this->jahr;
    }

    /**
     * Set geschichte
     *
     * @param string $geschichte
     * @return coin
     */
    public function setGeschichte($geschichte)
    {
        $this->geschichte = $geschichte;

        return $this;
    }

    /**
     * Get geschichte
     *
     * @return string
     */
    public function getGeschichte()
    {
        return $this->geschichte;
    }

    /**
     * Set motiv
     *
     * @param string $motiv
     * @return coin
     */
    public function setMotiv($motiv)
    {
        $this->motiv = $motiv;

        return $this;
    }

    /**
     * Get motiv
     *
     * @return string
     */
    public function getMotiv()
    {
        return $this->motiv;
    }

    /**
     * Set lID
     *
     * @param integer $lID
     * @return coin
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
     * Set eID
     *
     * @param integer $eID
     * @return coin
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
     * Set gwID
     *
     * @param integer $gwID
     * @return coin
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
}
