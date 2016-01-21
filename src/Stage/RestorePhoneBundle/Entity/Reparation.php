<?php

namespace Stage\RestorePhoneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reparation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Stage\RestorePhoneBundle\Entity\ReparationRepository")
 */
class Reparation
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
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dare_rendu", type="date")
     */
    private $dareRendu;

    /**
     * @var string
     *
     * @ORM\Column(name="probleme", type="string", length=255)
     */
    private $probleme;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;


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
     * Set date
     *
     * @param \DateTime $date
     * @return Reparation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set dareRendu
     *
     * @param \DateTime $dareRendu
     * @return Reparation
     */
    public function setDareRendu($dareRendu)
    {
        $this->dareRendu = $dareRendu;

        return $this;
    }

    /**
     * Get dareRendu
     *
     * @return \DateTime 
     */
    public function getDareRendu()
    {
        return $this->dareRendu;
    }

    /**
     * Set probleme
     *
     * @param string $probleme
     * @return Reparation
     */
    public function setProbleme($probleme)
    {
        $this->probleme = $probleme;

        return $this;
    }

    /**
     * Get probleme
     *
     * @return string 
     */
    public function getProbleme()
    {
        return $this->probleme;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return Reparation
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }
}
