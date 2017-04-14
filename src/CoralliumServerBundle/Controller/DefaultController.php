<?php

namespace CoralliumServerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoralliumServerBundle:Default:index.html.twig');
    }
}
