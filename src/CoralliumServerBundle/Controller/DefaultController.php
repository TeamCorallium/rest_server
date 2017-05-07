<?php

namespace CoralliumServerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends FOSRestController
{
    public function indexAction()
    {
        $data = array ( "roberto" => 1, "bogus" => 2);
        $view = $this->view($data, 200)
            ->setTemplate("CoralliumServerBundle:Default:index.html.twig")
            ->setTemplateVar('users')
        ;

        $view->setFormat("xml");

        return $this->handleView($view);
    }

    /**
     * Just to demonstrate authentication result
     *
     * @return JsonResponse
     */
    public function pingAction()
    {
        $data = array ( "ping" => 1 );
        $view = $this->view($data, 200);

        $view->setFormat("json");

        return $this->handleView($view);
    }
}
