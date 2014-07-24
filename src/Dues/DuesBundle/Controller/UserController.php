<?php

namespace Dues\DuesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function indexAction(Request $request)
    {
        
        $this->get('session')->set('_locale', 'pl_PL');
        return $this->render('DuesBundle:User:index.html.twig', array());
    }
}
