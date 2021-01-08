<?php
namespace Projet\Symfony2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\Symfony2Bundle\Form\congeForm;
use Projet\Symfony2Bundle\Entity\conge;
use Symfony\Component\HttpFoundation\response;
use Symfony\Component\HttpFoundation\Session\Session;
class congeController extends Controller
{
public function demandeCongeAction()
{
	$session=new Session();
    $pseudo = $session->get('code');
        $cong=new conge();
		$cngForm=$this->createForm(new congeForm(),$cong);
		$cnx=$this->getDoctrine()->getManager();
		$request=$this->get('request');
		if($request->isMethod('POST'))
		{
		  $cngForm->bind($request);
		   $forms=$request->get('projet_symfony2bundle_conge');
		  $d_debut=$forms['dateDebut'];
		  $d_fin=$forms['dateFin'];
		  if($d_debut<$d_fin)
        {
			
			$dt_deb = explode("-",$d_debut); 
			$dt_fin = explode("-",$d_fin); 
			 $jours_deb = $dt_deb[2]; 
			 $jours_fin = $dt_fin[2];
			 //nombre des jours demandé
             $nb_demande=$jours_fin-$jours_deb;		 
			 
		  $cnx->persist($cong);
		   
		   $cnx->flush();
		   echo "<script>alert('demande envoyé avec succée')</script>";
		   }
		   else
              {
			   echo "<script>alert('verifier date')</script>";
			  }		   
		 // return $this->redirect($this->generateURL('personnel_affichage'));
		 
		
		
  
		}
  

	return $this->render('pfeBundle:Conge:demande.html.twig',
								   array('pseudo'=>$pseudo,'form' => $cngForm->createView()));
	}

public function afficher_congeAction()
	{
	  $cnx=$this->getDoctrine()->getManager();
	  $resultat=$cnx->getRepository('pfeBundle:conge')->findBy(array('etat'=>NULL));
	  
	  return $this->render('pfeBundle:Conge:listeconge.html.twig',array('liste'=>$resultat));
	  
	}

	public function Validation_CongeAction($id)
	{
	  $cnx=$this->getDoctrine()->getManager();
	  $q = $cnx->createQueryBuilder()
			->update('pfeBundle:conge', 'cng')
			->set('cng.etat', '?1')
			
			->where('cng.id = ?2')
			->setParameter(1, 'valider')
			->setParameter(2, $id)
			->getQuery();
		$p = $q->execute();
	  //$resultat=$cnx->getRepository('pfeBundle:conge')->findAll();
	  return new response('demande validé');
	  //return $this->render('pfeBundle:Conge:listeconge.html.twig',array('liste'=>$resultat));
	  
	}
	public function cause_refuseAction($id)
	{
	  $req=$this->get('request');
	 
	  if($req->isMethod('POST'))
	  { 
	 // echo $req->get('form');
	  $form=$req->get('form');
	  $cause=$_REQUEST['cause'];
	 // echo $cause;
	  $cnx=$this->getDoctrine()->getManager();
	  $q = $cnx->createQueryBuilder()
			->update('pfeBundle:conge', 'cng')
			->set('cng.etat', '?1')
			->set('cng.cause', '?2')
			
			->where('cng.id = ?3')
			->setParameter(1, 'refuse')
			->setParameter(2, $cause)
			->setParameter(3, $id)
			->getQuery();
		$p = $q->execute();
	  
	  
	  }

	  return $this->render('pfeBundle:Conge:cause.html.twig');
	  
	}
	public function refuse_CongeAction()
	{
	  
	  //$resultat=$cnx->getRepository('pfeBundle:conge')->findAll();
	  return new response('demande refusé');
	  //return $this->render('pfeBundle:Conge:listeconge.html.twig',array('liste'=>$resultat));
	  
	}

	public function notificationAction()
	{
	    $session=new Session();
        $pseudo = $session->get('code');
		$cnx=$this->getDoctrine()->getManager();
		$notification= $cnx->getRepository('pfeBundle:conge')->findBy(array('personnel'=>$pseudo));
		$row=count($notification);
		return $this->render('pfeBundle:Conge:notification.html.twig',array('notification'=>$notification,
																			'row'=>$row));
	
	
	}
	public function CalendrierAction()
	{
	   
	   return $this->render('pfeBundle:Conge:calendrier.html.twig');
	
	}
}
