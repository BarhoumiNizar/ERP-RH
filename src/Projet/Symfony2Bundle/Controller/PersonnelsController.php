<?php
namespace Projet\Symfony2Bundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\Symfony2Bundle\Form\PersonnelsForm;
use Projet\Symfony2Bundle\Form\employeType;
use Projet\Symfony2Bundle\Entity\personnels;
use Projet\Symfony2Bundle\Entity\chef_equipe;
use Symfony\Component\HttpFoundation\response;
use Symfony\Component\HttpFoundation\Session\Session;
class PersonnelsController extends Controller
{
    public function ajoutPersonnelsAction()
    {
        $pers=new personnels();
		  /*$ch_equip=new chef_equipe(); */
		$form=$this->createForm(new PersonnelsForm());
		$cnx=$this->getDoctrine()->getManager();
		$manager=$cnx->getRepository('pfeBundle:personnels')->findByprofil("chef_equipe");
		$request=$this->get('request');
		if($request->isMethod('POST'))
		{
		   $form->bind($request);
		   $forms=$request->get('form');
		    $nom=$forms['nom'];
			$prenom=$forms['prenom'];
		   $ch=$forms['profil'];
		   $manager=$_REQUEST['manager'];
		   $cod=$forms['code'];
		   $mdp=$forms['mdp'];
		   $d=$forms['date_entree'];
		   $dat=date('Y-m-d');
		  
		   $tab = explode("-",$d); 
		   $annee = $tab[0]; 
			 $mois = $tab[1]; 
			 $jours = $tab[2]; 
			 $pers->SetNom($nom);
			 $pers->SetPrenom($prenom);
			 $pers->SetCode($cod);
			 $pers->SetMdp($mdp);
			 $pers->SetProfil($ch);
			 $pers->SetManager($manager);
			 $pers->SetAnneeEntree($annee);
			 $pers->SetMoisEntree($mois);
			 $pers->SetJourEntree($jours);
		  if($dat>=$d)
		  {
		 $cnx->persist($pers);
		   
		   $cnx->flush();
		   echo "<script>alert('Personnel ajouté avec succé')</script>";
		   echo "<script>document.location.href='affichage'</script>";
		   }
		   else 
		   {echo "<script>alert('Date invalide')</script>";
		   echo "<script>document.location.href='form'</script>";
		   }
		  //return $this->redirect($this->generateURL('personnel_affichage'));
		 // echo 
			  
		}
		return $this->render('pfeBundle:Personnels:form.html.twig', array('form' => $form->createView(),
		                                                                   'manager'=>$manager));
    }
	
	public function affichage_personnelAction()
	{
	  $cnx=$this->getDoctrine()->getManager();
	  $resultat=$cnx->getRepository('pfeBundle:personnels')->findAll();
	  
	  return $this->render('pfeBundle:Personnels:affichagepersonnels.html.twig',array('liste'=>$resultat));
	  
	}
	public function recupere_personnelsAction()
	{
	  $cnx=$this->getDoctrine()->getManager();
	  $resultat=$cnx->getRepository('pfeBundle:personnels')->findAll();
	  
	  return $this->render('pfeBundle:Personnels:listepersonnels.html.twig',array('liste'=>$resultat));
	  
	}
	public function recupere_personnelAction()
	{
	  $cnx=$this->getDoctrine()->getManager();
	  $resultat=$cnx->getRepository('pfeBundle:personnels')->findAll();
	  
	  return $this->render('pfeBundle:Personnels:listepersonnel.html.twig',array('liste'=>$resultat));
	  
	}
	public function deleteAction($id)
	{
	 $cnx=$this->getDoctrine()->getManager();
	 $delete=$cnx->getRepository('pfeBundle:personnels')->find($id);
	 $cnx->remove($delete);
	$cnx->flush();
	return $this->redirect($this->generateURL('personnel_affichage'));
	}
	public function updateAction($id)
	{
	  $cnx=$this->getDoctrine()->getManager();
	  $update=$cnx->getRepository('pfeBundle:personnels')->find($id);
	  	$form=$this->createForm(new PersonnelsForm(),$update);
		$request=$this->get('request');
		if($request->isMethod('POST'))
		{
		   $form->bind($request);
		   $cnx->persist($update);
		   $cnx->flush();
		  return $this->redirect($this->generateURL('personnel_affichage'));
		}
	return $this->render('pfeBundle:Personnels:form.html.twig', array('form' => $form->createView()));
	}
	public function connexionAction()
	{
	   $form=$this->createForm(new PersonnelsForm());
	  
	   $request=$this->get('request');
	   if($request->isMethod('POST'))
		{
		  $cnx=$this->getDoctrine()->getManager();
		   $formulaire=$request->get('form');
		   $code=$formulaire['code'];
		   $mdp=$formulaire['mdp'];
		   //echo $formulaire['code'];
		  
		   $resultat=$cnx->getRepository('pfeBundle:personnels')->findOneBy(array('code'=>$code));
		      if($resultat==null)
			  {
			   echo "<script>alert('vous n êtes pas membre')</script>";
				  $session = new Session();
               	// définit et récupère des attributs de session
		      $session->set('personnel',$resultat);
			  if($session==null)
				  $session->set('personnel',null);
				  
		       
			  }
		   else 
		   {
			    
			 $session = new Session();
               	// définit et récupère des attributs de session
		      $session->set('personnel',$resultat);	
			  $session->set('code',$resultat->getCode());	
			  $session->set('personnels',$resultat->getProfil());
			  
			  if($resultat->getProfil()=='admin')
		{
		return $this->redirect($this->generateURL('Admin_Accueil'));}
		   }
		   if($resultat->getProfil()=='Ressource_humaine')
		{
		return $this->redirect($this->generateURL('RH_Accueil'));
		   }
		    if($resultat->getProfil()=='Employe')
		{
		return $this->render('pfeBundle:Admin:employe.html.twig');
		   }
		   if($resultat->getProfil()=='chef_equipe')
		{
		return $this->render('pfeBundle:Admin:ch_equipe.html.twig');
		   }
		}
	   return $this->render('pfeBundle:Personnels:connexion.html.twig', array('form' => $form->createView()));
	
	}
	public function deconnexionAction()
	{
		$session = new Session();
		$session->clear();
       
		return $this->redirect($this->generateURL('personnel_connexion'));

	}
	public function popupAction()
	{
	return $this->render('pfeBundle:Personnels:popup.html.twig');
	}
	public function RHAction()
	{
	return $this->render('pfeBundle:Personnels:rh.html.twig');
	}
	public function getSoldeCongeAction()
	{
	   $session=new Session();
        $pseudo = $session->get('code');
		
	  $cnx=$this->getDoctrine()->getManager();
	  $solde=$cnx->getRepository('pfeBundle:personnels')->findOneBycode($pseudo);
	  $etat_conge=$cnx->getRepository('pfeBundle:conge')->findOneBypersonnel($pseudo);
	   $jour=date('d');
	   $mois=date('m');
	   $annee=date('Y');
	 $date_debut=$etat_conge->getDateDebut();
	 $date_fin=$etat_conge->getDateFin();
	 $dt_deb = explode("-",$date_debut); 
	 $dt_fin = explode("-",$date_fin); 
	 $jours_deb = $dt_deb[2]; 
	 $jours_fin = $dt_fin[2];
			 //nombre des jours demandé
      $nb_demande=$jours_fin-$jours_deb;	
	   return $this->render('pfeBundle:Personnels:solde.html.twig',array( 'solde'=>$solde,
	                                                                      'dt'=>$jour,
																		  'mois'=>$mois,
																		  'annee'=>$annee,
																		  'etat_conge'=>$etat_conge,
																		  'nb_demande'=>$nb_demande));
																		  
	}
	
	public function getEmployeAction()
	{
	  $cnx=$this->getDoctrine()->getManager();
	  $resultat=$cnx->getRepository('pfeBundle:personnels')->findBy(array('profil'=>'Employe'));
	  
	 return $this->render('pfeBundle:Personnels:listeEmploye.html.twig',array('liste'=>$resultat));
	}
	public function AffectationAction()
	{
	  $cnx=$this->getDoctrine()->getManager();
	  $form=$this->createForm(new employeType());
	  
	 return $this->render('pfeBundle:Personnels:affectation.html.twig', array('form' => $form->createView()));
	}
	
	
}
