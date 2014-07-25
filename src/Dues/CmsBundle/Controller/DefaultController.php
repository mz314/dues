<?php

namespace Dues\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
 
   
    public function categoryAction($name=null) {
        var_dump($name);
        die;
        return '';
    }
}
