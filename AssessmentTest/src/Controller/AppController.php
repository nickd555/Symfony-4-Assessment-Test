<?php

namespace App\Controller;

use App\Entity\DataHandler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="app")
     */
    public function index()
    {
        return $this->render('app/index.html.twig');
    }

    public function save() {
        $entityManager = $this->getDoctrine()->getManager();

        $dataHandler = new dataHandler();
    }
}
