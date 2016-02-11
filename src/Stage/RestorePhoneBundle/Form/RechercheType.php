<?php

namespace Stage\RestorePhoneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Range;




class RechercheType extends AbstractType
{
   public function buildForm(FormBuilderInterface $builder, array $options)

{
     $builder

->add('Client', 'entity', array('class' => 'StageRestorePhoneBundle:Client', 'property' => 'Nom', 'required' => false))

->add('Telephone', 'entity', array('class' => 'StageRestorePhoneBundle:Telephone', 'property' => 'IMEI', 'required' => false));  

   }
   
   public function getName()

{

return 'StageRestorePhoneBundle_recherchereparation';

}
}
