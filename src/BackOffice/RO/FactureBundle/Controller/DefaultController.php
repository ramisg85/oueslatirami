<?php

namespace BackOffice\RO\FactureBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FactureBundle:Default:index.html.twig', array('name' => $name));
    }
}
