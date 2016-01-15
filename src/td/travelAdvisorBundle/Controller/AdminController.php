<?php

namespace td\travelAdvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AdminController extends Controller
{
    /**
     * @Route("/admin")
     * @Template()
     */
    public function adminAction()
    {
        return array();
    }
	/**
     * @Route("/admin/redirection")
     * @Template()
     */
    public function redirectionAction()
    {
        return $this->redirect($this->generateUrl('redirection'));
    }
	
	
}
