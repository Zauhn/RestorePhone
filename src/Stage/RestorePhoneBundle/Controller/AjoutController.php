<?php

namespace Stage\RestorePhoneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Stage\RestorePhoneBundle\Entity\Client;
use Stage\RestorePhoneBundle\Entity\Telephone;
use Stage\RestorePhoneBundle\Entity\Reparation;

class AvisController extends Controller
{
	
	/**
     * @Route("/avis/{id}")
     * @Template()
     */
    public function avisAction($id)
    {
        return array('id'=> $id);
    }
}