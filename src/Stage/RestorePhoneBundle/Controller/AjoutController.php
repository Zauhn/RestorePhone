<?php

namespace Stage\RestorePhoneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Stage\RestorePhoneBundle\Entity\Client;
use Stage\RestorePhoneBundle\Entity\Telephone;
use Stage\RestorePhoneBundle\Entity\Reparation;
use Stage\RestorePhoneBundle\Form\TelephoneType;
use Stage\RestorePhoneBundle\Form\ReparationType;
use Symfony\Component\HttpFoundation\Request;

class AjoutController extends Controller
{
	
	/**
     * @Route("/ajouter")
     * @Template()
     */
    public function ajouterAction(Request $request)
    {
        $reparation = new Reparation();
        $form = $this->get('form.factory')->create(new ReparationType(), $reparation);
        
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reparation);
            $em->flush();
        
        $request->getSession()->getFlashBag()->add('notice', 'Reparatione bien enregistrée.');

        return $this->redirect($this->generateUrl('voir', array('id' => $reparation->getId())));
        }

        return $this->render('StageRestorePhoneBundle:Ajout:form.html.twig', array(
      'form' => $form->createView(),
    ));
    }
}