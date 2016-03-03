<?php

namespace RecruiterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RecruiterBundle:Default:index.html.twig');
    }
}
