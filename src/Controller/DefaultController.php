<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{

    /**
    * @Route("/", name="home")
    */
    public function homeAction(Request $request) {
        return $this->render('home.html.twig', [
            'database' => $this->container->getParameter('db_url'),
        ]);
    }
}
