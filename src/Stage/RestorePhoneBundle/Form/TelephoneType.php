<?php

namespace Stage\RestorePhoneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Stage\RestorePhoneBundle\Entity\Client;
use Stage\RestorePhoneBundle\Entity\Telephone;
use Stage\RestorePhoneBundle\Entity\Reparation;
use Stage\RestorePhoneBundle\Form\TelephoneType;
use Stage\RestorePhoneBundle\Form\ClientType;

class TelephoneType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //On donne au generateur de formulaire les valeurs a entrer
        $builder
            ->add('IMEI',   'text')
            ->add('modele', 'text')
            ->add('monClient',  new ClientType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Stage\RestorePhoneBundle\Entity\Telephone'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'stage_restorephonebundle_telephone';
    }
}
