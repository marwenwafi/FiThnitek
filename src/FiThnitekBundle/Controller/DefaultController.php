<?php

namespace FiThnitekBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@FiThnitek/FiThnitek/index.html.twig');
    }

    public function adminAction()
    {
<<<<<<< HEAD
        return $this->render('@FiThnitek/FiThnitek/login.html.twig');
    }
    public function OffreColisAction()
    {
        return $this->render('@FiThnitek/FiThnitek/OffreColis.html.twig');
=======
        return $this->render('@FiThnitek/FiThnitek/backend.html.twig');
>>>>>>> marwen
    }
    public function indexbackAction()
    {
        return $this->render('@FiThnitek/FiThnitek/indexback.html.twig');
    }
}
