<?php

namespace FrontOffice\RO\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ROFrontBundle:Default:index.html.twig');
    }
}
