<?php

namespace FiThnitekBundle\Controller;

use FiThnitekBundle\Entity\offreCovoiturage;
use FiThnitekBundle\Entity\ReservationCovoiturage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
class CovoiturageController extends Controller
{


    public function ajoutoffrecovoiturageAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $cov = new offreCovoiturage();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        dump($user);
        if ($request->isMethod('POST')) {

            $cov->setIdutilisateur($user);
            $cov->setDestination($request->get('destination'));
            $cov->setDepart($request->get('departure'));
            $cov->setPrix($request->get('prix'));
            $cov->setNbrplaceo($request->get('nbr'));
            $cov->setDate($request->get('datee'));
            $em->persist($cov);
            $em->flush();
            return $this->render('@FiThnitek/FiThnitek/offrecovoiturage.html.twig', array('cov' => $cov));

        }


        return $this->render('@FiThnitek/FiThnitek/offrecovoiturage.html.twig', array('cov' => $cov));
    }

    public function readoffreAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        var_dump($user);
        $em = $this->getDoctrine()->getManager()->getRepository(offreCovoiturage::class)->findBy(array('idutilisateur'=>$user->getId()));
        return $this->render('@FiThnitek/FiThnitek/affichagecovoiturageutilisateur.html.twig', array('r' => $em));
    }

    public function supprimeroffreAction($id)
    {

        $ids = $this->getDoctrine()->getRepository(offreCovoiturage::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($ids);
        $em->flush();
        //$tab = $this->getDoctrine()->getRepository(Club::class)->findAll() ;

        return $this->redirectToRoute("fi_thnitek_affichcovoiturageutilisateur");
    }

    public function modifieroffrecovoiturageAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $cov = $em->getRepository(offreCovoiturage::class)->find($id);
        //$cov = new offreCovoiturage();
        //$user = $this->container->get('security.token_storage')->getToken()->getUser();
        //dump($user);
        if ($request->isMethod('POST')) {


            $cov->setDestination($request->get('destination'));
            $cov->setDepart($request->get('departure'));
            $cov->setPrix($request->get('prix'));
            $cov->setNbrplaceo($request->get('nbr'));
            $cov->setDate($request->get('datee'));
            //$em->persist($cov);
            $em->flush();
            return $this->render('@FiThnitek/FiThnitek/modifieroffrecovoiturage.html.twig', array('cov' => $cov));

        }
        return $this->render('@FiThnitek/FiThnitek/modifieroffrecovoiturage.html.twig', array('cov' => $cov));

    }
    public function afficheallAction()
    {$em = $this->getDoctrine()->getManager();
        $cov = $em->getRepository(offreCovoiturage::class)->findAll();

        return $this->render('@FiThnitek/FiThnitek/affichageallcovoiturage.html.twig', array('cov' => $cov));
    }

    public function ajoutreservationAction(Request $request,$id)
    {
        $reservation = new ReservationCovoiturage();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();


$offre= $this->getDoctrine()->getRepository(offreCovoiturage::class)->find($id);


        if ($request->isMethod('POST'))
        {
            $reservation->setIdutilisateurr($user);
            $reservation->setIdoffrer($offre);
            $reservation->setNbrplacer($request->get('nbrr'));
            $reservation->setPrixt(5);

            $em->persist($reservation);
            $em->flush();
            return $this->render('@FiThnitek/FiThnitek/login.html.twig', array('res' => $reservation));
        }



        return $this->render('@FiThnitek/FiThnitek/register.html.twig');



    }
    public function readreserverAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager()->getRepository(ReservationCovoiturage::class)->findBy(array('idutilisateurr'=>$user->getId()));
        return $this->render('@FiThnitek/FiThnitek/affichagereservecovoiturageutilisateur.html.twig', array('r' => $em));
    }
}
