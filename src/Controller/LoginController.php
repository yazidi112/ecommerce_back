<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index(UserRepository $ur,Request $req)
    {

        $user = $ur->findOneBy(["email"=> $req->get('email'),"password"=> $req->get('password')]);
        return $this->json($user);
    }
}
