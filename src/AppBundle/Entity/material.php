<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * material
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class material
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
     * @ORM\Column(name="material", type="string", length=100)
     */
    private $material;


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
     * @return material
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
     * Set material
     *
     * @param string $material
     * @return material
     */
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get material
     *
     * @return string
     */
    public function getMaterial()
    {
        return $this->material;
    }
}
