<?php

namespace Projet\Symfony2Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class employeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('employe','text',array('attr'=>array('class'=>'form-control input-lg')))
            ->add('chefEquip','entity',array('class'=>'pfeBundle:chef_equipe',
			                                 'property'=>'code',
											 'attr'=>array('class'=>'form-control input-lg')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Projet\Symfony2Bundle\Entity\employe'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'projet_symfony2bundle_employe';
    }
}
