<?php

namespace Stage\RestorePhoneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telephone
 *
 * @ORM\Table()
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
}
