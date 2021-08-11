<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function home(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Home number: '.$number.'</body></html>'
        );
    }

    /**
    * @Route("/about",search, methods={"GET"})
    */
    public function about()
    {
        return $this->render('about.html.twig');
    }
}