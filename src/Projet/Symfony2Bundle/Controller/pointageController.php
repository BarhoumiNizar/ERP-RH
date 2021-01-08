<?php
namespace Projet\Symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\Symfony2Bundle\Form\pointageForm;
use Projet\Symfony2Bundle\Entity\pointage;
use Symfony\Component\HttpFoundation\response;
use Symfony\Component\HttpFoundation\Session\Session;
class pointageController extends Controller
{
public function pointage_entreeAction()
{

$form=$this->createForm(new pointageForm());
 $session = new Session();
 //$ip=$_SERVER['REMOTE_ADDR'];
 //$code=$session->get('personnels');
 $dt=date("Y-m-d H:i:s");
 
	return $this->render('pfeBundle:pointage:pointage.html.twig',
	                                  array(//'ip'=>$ip,
									         'dt'=>$dt,
											 'form'=>$form->createView()));
	}
public function pointageSortieAction()
{

$form=$this->createForm(new pointageForm());
 $session = new Session();
 
 //$code=$session->get('personnels');
 $dt=date("Y-m-d H:i:s");
 
	return $this->render('pfeBundle:pointage:pointage_sortie.html.twig',
	                                  array(
									         'dt'=>$dt,
											 'form'=>$form->createView()));
	}
	public function pointerAction()
	{
	   $pntg=new pointage();
	   $req=$this->get('request');
	   $fr=$req->get('projet_symfony2bundle_pointage');
	  
	   	   $code=$fr['code'];
		   	$date=$fr['date'];
				$pointage=$fr['pointage'];
			
	  
	     $cnx=$this->getDoctrine()->getmanager();
		 $pntg->setCode($code);
		 $pntg->setDate($date);
		 $pntg->setPointage($pointage);
		 $cnx->persist($pntg);
		 $cnx->flush();
		 return new response('pointage effectuée dans '.$date);
		
	   
	   
 
	}
	public function afficher_pointageAction()
	{
	  $cnx=$this->getDoctrine()->getManager();
	  $resultat=$cnx->getRepository('pfeBundle:pointage')->findAll();
	  
	  return $this->render('pfeBundle:pointage:listepointage.html.twig',array('liste'=>$resultat));
	  
	}
	

}
