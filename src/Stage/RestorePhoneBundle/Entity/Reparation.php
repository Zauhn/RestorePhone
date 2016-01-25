<?php

namespace Stage\RestorePhoneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reparation
 *
 * @ORM\Table("reparation")
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
     * @ORM\ManyToOne(targetEntity="Stage\RestorePhoneBundle\Entity\Telephone")
     * @ORM\JoinColumn(nullable=false)
     */
    private $monTelephone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rendu", type="date")
     */
    private $dateRendu;

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
     * Set dateRendu
     *
     * @param \DateTime $dateRendu
     * @return Reparation
     */
    public function setDateRendu($dateRendu)
    {
        $this->dateRendu = $dateRendu;

        return $this;
    }

    /**
     * Get dateRendu
     *
     * @return \DateTime 
     */
    public function getDateRendu()
    {
        return $this->dateRendu;
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

    /**
     * Set monTelephone
     *
     * @param \Stage\RestorePhoneBundle\Entity\Telephone $monTelephone
     * @return Reparation
     */
    public function setMonTelephone(\Stage\RestorePhoneBundle\Entity\Telephone $monTelephone)
    {
        $this->monTelephone = $monTelephone;

        return $this;
    }

    /**
     * Get monTelephone
     *
     * @return \Stage\RestorePhoneBundle\Entity\Telephone 
     */
    public function getMonTelephone()
    {
        return $this->monTelephone;
    }
}
