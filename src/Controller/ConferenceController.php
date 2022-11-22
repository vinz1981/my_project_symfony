<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return new Response(<<<EOF
        <html>
            <body>
            <img width="1000px" class="text-center" src="/images/under-construction.gif" class="rounded" alt="Responsive image">

          </div>
            </body>
        </html>
        EOF
               );
    }
}
