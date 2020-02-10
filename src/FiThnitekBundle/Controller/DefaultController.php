<?php

namespace FiThnitekBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@FiThnitek/FiThnitek/index.html.twig');
    }

    public function loginAction()
    {
        return $this->render('@FiThnitek/FiThnitek/login.html.twig');
    }
    public function registerAction()
    {
        return $this->render('@FiThnitek/FiThnitek/register.html.twig');
    }
    public function offrecovoiturageAction()
    {
        return $this->render('@FiThnitek/FiThnitek/offrecovoiturage.html.twig');
    }
    public function affichagecovoiturageutilisateurAction()
    {
        return $this->render('@FiThnitek/FiThnitek/affichagecovoiturageutilisateur.html.twig');
    }
}
