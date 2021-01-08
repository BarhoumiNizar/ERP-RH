<?php
namespace Projet\Symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\Symfony2Bundle\Form\congeForm;
use Projet\Symfony2Bundle\Entity\conge;
use Symfony\Component\HttpFoundation\response;
use Symfony\Component\HttpFoundation\Session\Session;
class adminController extends Controller
{
public function interfaceadminAction()
{

	return $this->render('pfeBundle:Admin:index.html.twig');
	}
	public function interfaceRHAction()
{

	return $this->render('pfeBundle:Admin:rh.html.twig');
	}

public function afficher_congeAction()
	{
	  $cnx=$this->getDoctrine()->getManager();
	  $resultat=$cnx->getRepository('pfeBundle:conge')->findAll();
	  
	  return $this->render('pfeBundle:Conge:listeconge.html.twig',array('liste'=>$resultat));
	  
	}

}
