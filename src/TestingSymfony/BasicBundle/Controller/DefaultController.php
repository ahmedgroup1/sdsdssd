<?php

namespace TestingSymfony\BasicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TestingSymfonyBasicBundle:Default:index.html.twig', array('name' => $name));
    }
}
