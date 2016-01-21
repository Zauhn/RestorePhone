<?php

namespace Stage\RestorePhoneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TelephoneType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('iMEI')
            ->add('modele')
            ->add('monClient')
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