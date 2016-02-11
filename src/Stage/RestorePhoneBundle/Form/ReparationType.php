<?php

namespace Stage\RestorePhoneBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReparationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //On donne au generateur de formulaire les valeurs a entrer
        $builder
            ->add('date',   'date')
            ->add('dateRendu',  'date')
            ->add('probleme',   'text')
            ->add('prix',   'integer')
            ->add('telephone', new TelephoneType())
            ->add('Ajouter',       'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Stage\RestorePhoneBundle\Entity\Reparation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'stage_restorephonebundle_reparation';
    }
}
