<?php

namespace FiThnitekBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller
{
    public function CreateLeaderBoardAction()
    {
        return $this->render('@FiThnitek/LeaderBoard/index.html.twig');
    }

    public function ModifyLeaderBoardAction()
    {
        return $this->render('@FiThnitek/LeaderBoard/index.html.twig');
    }

    public function DeleteLeaderBoardAction()
    {
        return $this->render('@FiThnitek/LeaderBoard/index.html.twig');
    }

    public function ListLeaderBoardsAction()
    {
        return $this->render('@FiThnitek/LeaderBoard/index.html.twig');
    }

}
