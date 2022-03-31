<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user/{name}', name: 'app_user')]
    public function index($name): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
            'name' => $name,
            'name_array' => ["name"=> "$name", "job"=>"developer"]
        ]);
    }
}
