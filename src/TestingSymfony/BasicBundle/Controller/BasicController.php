<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace TestingSymfony\BasicBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class BasicController extends Controller{
    public function helloAction()
    {
        return $this->render('TestingSymfonyBasicBundle:Basic:hello.html.twig');
    }
}

