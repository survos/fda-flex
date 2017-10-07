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
    * @Route("/x", name="homex")
    */
    public function homeAction(Request $request) {
        return new Response("<html><body>Hello, world!</body></html>");
    }
}
