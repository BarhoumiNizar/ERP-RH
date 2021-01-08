<?php

namespace Projet\Symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('pfeBundle:Default:index.html.twig', array('name' => $name));
    }
	public function templateAction()
	{
	  return $this->render('pfeBundle:Default:template.html.twig');
	
	}
	
}
