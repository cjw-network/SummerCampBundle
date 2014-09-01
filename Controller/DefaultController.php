<?php

namespace Cjw\SummerCampBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CjwSummerCampBundle:Default:index.html.twig', array('name' => $name));
    }
}
