<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TinyPizzaController extends Controller
{
    /**
     * @Route("/tiny/pizza", name="tiny_pizza")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/TinyPizzaController.php',
        ]);
    }
}
