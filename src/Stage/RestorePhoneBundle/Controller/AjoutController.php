<?php

namespace Stage\RestorePhoneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Stage\RestorePhoneBundle\Entity\Client;
use Stage\RestorePhoneBundle\Entity\Telephone;
use Stage\RestorePhoneBundle\Entity\Reparation;

class AjoutController extends Controller
{
	
	/**
     * @Route("/ajouter")
     * @Template()
     */
    public function ajouterAction()
    {
        $reparation = new Reparation();
        $formBuilder = $this->get('form.factory')->createBuilder('form', $reparation);
        $formBuilder
                ->add('date',   'date')
                ->add('dateRendu',     'date')
                ->add('probleme',       'text')
                ->add('prix',       'integer')
                ->add('Ajouter',       'submit')
                ;
        $form = $formBuilder->getForm();
        return $this->render('StageRestorePhoneBundle:Ajout:form.html.twig', array('form'=>$form->createView(),
            ));
        
    }
}