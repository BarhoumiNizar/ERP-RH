<?php
namespace Projet\Symfony2Bundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class PersonnelsForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder,array $options)
	{
	$builder->add('nom','text',array('attr'=>array('class'=>'form-control input-lg')))
	        ->add('prenom','text',array('attr'=>array('class'=>'form-control input-lg')))
            ->add('profil','choice',array('choices'=>array('chef_equipe'=>'Chef Equipe',
														    'Employe'=>'Employe',
															'admin'=>'Admin',
															'Ressource_humaine'=>'Ressource humaine'),
										 'attr'=>array('class'=>'form-control input-lg')))
			/*->add('manager','entity',array('attr'=>array('class'=>'form-control input-lg'),
			                                'class'=>'pfeBundle:personnels',
											  'property'=>'nom'))*/
            ->add('code','text',array('attr'=>array('class'=>'form-control input-lg')))
            ->add('mdp','password',array('attr'=>array('class'=>'form-control input-lg')))
			->add('date_entree','date',array('attr'=>array('class'=>'form-control input-lg'),
			                              'widget' => 'single_text',
										    'input' => 'datetime',
                                           'format' => 'yyyy-MM-dd'));
	
	}
	public function getName()
	{
	  return 'form';
	}



}