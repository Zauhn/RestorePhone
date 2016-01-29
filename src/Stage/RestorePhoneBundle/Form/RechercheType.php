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

->add('<Client', 'entity', array('class' => 'StageRestorePhoneBundle:Client', 'property' => 'Nom', 'empty_value' => 'Tout', 'required' => false))

->add('Telephone', 'entity', array('class' => 'StageRestorePhoneBundle:Telephone', 'property' => 'IMEI', 'empty_value' => 'Tout', 'required' => false))  

->add('Reparation', 'entity', array('class' => 'StageRestorePhoneBundle:Reparation', 'Reparation' => 'Date', 'empty_value' => 'Tout', 'required' => false))
   }
   
   public function getName()

{

return 'SatgeRestorePhoneBundle_recherchereparation';

}
}
