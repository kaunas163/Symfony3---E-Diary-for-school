<?php

namespace EDiaryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EDiaryBundle:Default:index.html.twig');
    }
}
