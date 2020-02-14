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
    public function OffreColisAction()
    {
        return $this->render('@FiThnitek/FiThnitek/OffreColis.html.twig');
    }
    public function indexbackAction()
    {
        return $this->render('@FiThnitek/FiThnitek/indexback.html.twig');
    }
}
