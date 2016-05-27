<?php

namespace MisTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MisTestBundle:Default:index.html.twig');
    }
}
