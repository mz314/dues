<?php

namespace Dues\DuesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    public function indexAction(Request $request)
    {
        var_dump($request);
        $this->get('session')->set('_locale', 'pl_PL');
        return $this->render('DuesBundle:Default:index.html.twig', array());
    }
}
