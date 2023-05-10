<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('asdf');
    }
}