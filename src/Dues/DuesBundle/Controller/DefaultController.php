<?php

namespace Dues\DuesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DuesBundle:Default:index.html.twig', array());
    }
}
