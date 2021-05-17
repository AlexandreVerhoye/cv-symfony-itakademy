<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExpproController extends AbstractController
{
    /**
     * @Route("/exppro", name="exppro")
     */
    public function index(): Response
    {
        return $this->render('exppro/index.html.twig');
    }
}
