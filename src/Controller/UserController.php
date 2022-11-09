<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    private EntityManagerInterface $_em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->_em = $em;
    }

    /**
     * @Route("/user", name="user_index", methods={"GET"})
     */
    public function index()
    {

        $users = $this->_em->getRepository(User::class)->findAll();

        return $this->render('user/index.html.twig', [
            'users' => $users
        ]);
    }
}
