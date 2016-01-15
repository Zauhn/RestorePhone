<?php

namespace td\travelAdvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
	
	/**
     * @Route("/voyage")
     * @Template()
     */
    public function bienvenueAction()
    {
	return array();
    }
	
	  /**
     * @Route("/voyage/{prenom}")
     * @Template()
     */
    public function bienvenue2Action($prenom)
    {
        return $this->redirect($this->generateUrl('voyage'));
    }
	
	/**
     * @Route("/avis/{num}")
     * @Template()
     */
    public function avisAction($num)
    {
         $num;
    }
}
