<?php

namespace App\Controller;

use App\Entity\Room;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaseController extends AbstractController
{
    /**
     * @Route("/");
     */
    public function home() {
        return $this->render("home.html.twig");
    }

    /**
     * @Route("/rooms");
     */
    public function rooms(EntityManagerInterface $em) {
        $rooms = $em->getRepository(Room::class)->findAll();
        return $this->render("rooms.html.twig", [
            "rooms" => $rooms
        ]);
    }
}