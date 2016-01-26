<?php

namespace Stage\RestorePhoneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telephone
 *
 * @ORM\Table("telephone")
 * @ORM\Entity(repositoryClass="Stage\RestorePhoneBundle\Entity\TelephoneRepository")
 */
class Telephone
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
     * @ORM\ManyToOne(targetEntity="Stage\RestorePhoneBundle\Entity\Client", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $monClient;
    
    /**
     * @var string
     *
     * @ORM\Column(name="IMEI", type="string", length=255)
     */
    private $iMEI;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=255)
     */
    private $modele;


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
     * Set iMEI
     *
     * @param string $iMEI
     * @return Telephone
     */
    public function setIMEI($iMEI)
    {
        $this->iMEI = $iMEI;

        return $this;
    }

    /**
     * Get iMEI
     *
     * @return string 
     */
    public function getIMEI()
    {
        return $this->iMEI;
    }

    /**
     * Set modele
     *
     * @param string $modele
     * @return Telephone
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string 
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set monClient
     *
     * @param \Stage\RestorePhoneBundle\Entity\MonClient $monClient
     * @return Telephone
     */
    public function setMonClient(\Stage\RestorePhoneBundle\Entity\MonClient $monClient)
    {
        $this->monClient = $monClient;

        return $this;
    }

    /**
     * Get monClient
     *
     * @return \Stage\RestorePhoneBundle\Entity\MonClient 
     */
    public function getMonClient()
    {
        return $this->monClient;
    }
}
