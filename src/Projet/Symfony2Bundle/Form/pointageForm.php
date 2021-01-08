<?php

namespace Projet\Symfony2Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class pointageForm extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
         
            ->add('date','text',array('attr'=>array('class'=>'form-control input-lg','readonly'=>true )))
            ->add('code','text',array('attr'=>array('class'=>'form-control input-lg','readonly'=>true)))
			->add('pointage','hidden',array('attr'=>array('class'=>'form-control input-lg')));
			 
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    

    /**
     * @return string
     */
    public function getName()
    {
        return 'projet_symfony2bundle_pointage';
    }
}
