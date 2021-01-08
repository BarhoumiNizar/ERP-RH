<?php

namespace Projet\Symfony2Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class congeForm extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('personnel','text',array('attr'=>array('readonly'=>true,
			                                              'class'=>'form-control input-lg')))
            ->add('dateDebut','date',array('attr'=>array('class'=>'form-control input-lg',
			                                              ),
			                              'widget' => 'single_text',
										    'input' => 'datetime',
                                           'format' => 'yyyy-MM-dd'
                                               ))
            ->add('dateFin','date',array('attr'=>array('class'=>'form-control input-lg'),
			                              'input'  => 'datetime','widget' => 'single_text',
										  'format' => 'yyyy-MM-dd'))
            ->add('dateDepot','text',array('attr'=>array('class'=>'form-control input-lg',
			                                              'value'=>date('Y-m-d'),
														  'readonly'=>true)))
            ->add('type','choice',array('choices'=>array('Travail'=>'travail',
			                                             'Maternité'=>'maternité',
														 'Maladie'=>'maladie'),
			                            'attr'=>array('class'=>'form-control input-lg')));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Projet\Symfony2Bundle\Entity\conge'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'projet_symfony2bundle_conge';
    }
}
