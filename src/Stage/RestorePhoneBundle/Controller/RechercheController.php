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
use Stage\RestorePhoneBundle\Form\RechercheType;





class RechercheController extends Controller
{
	/**
     * @Route("/voir")
     * @Template()
     */

    public function indexAction()

    {

        //On crée le FormBuilder grâce à la méthode du contrôleur. Toujours sans entité

            $form = $this->createForm(new RechercheType());

        //On récupère la requête

            $request = $this->getRequest();

        if($request->getMethod() == 'POST')

        {

        $form->bind($request);

            //On vérifie que les valeurs entrées sont correctes

                if($form->isValid())

                    {

                        $em = $this->getDoctrine()->getManager();

                            //On récupère les données entrées dans le formulaire par l'utilisateur

                        $data = $this->getRequest()->request->get('SatgeRestorePhoneBundle_recherchereparation');

                            //On va récupérer la méthode dans le repository afin de trouver toutes les annonces filtrées par les paramètres du formulaire

                        //$liste_recherche = $em->getRepository('StageRestorePhoneBundle:Reparation')->findByOne($data);

                        if (!empty($_POST['Nom']))
                        {
                            $repository=  $this
                                    ->getDoctrine()
                                    ->getManager()
                                    ->getRepository('StageRestorePhoneBundle:Client');
                            $liste_recherche=$repository->findBy(
                                    array('Nom' => $data),
                                    array('id' => 'desc'),
                                    5,
                                    0);
                        }
                        else
                        {
                            $repository=  $this
                                    ->getDoctrine()
                                    ->getManager()
                                    ->getRepository('StageRestorePhoneBundle:Telephone');
                            $liste_recherche=$repository->findBy(
                                    array('iMEI' => $data),
                                    array('id' => 'desc'),
                                    5,
                                    0);
                        }
                        
//                        foreach ($liste_recherche as $reparation) 
//                        {
//                             echo $reparation->getContent();
//                        }
                              //Puis on redirige vers la page de visualisation de cette liste d'annonces

                        return $this->render('StageRestorePhoneBundle:Recherche:listeRecherche.html.twig', array('liste_recherche' => $liste_recherche));
                    }

            }



            // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire

            // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau

            return $this->render('StageRestorePhoneBundle:Recherche:index.html.twig', array('form' => $form->createView()));


    }
}
?>