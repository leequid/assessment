<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    #[Route('/api/article', methods:['GET'])]
    public function getArticle(): Response
    {
        return JsonResponse::fromJsonString(file_get_contents('C:\Users\1988e\assessment\public\Interview-Assessment.json'));
    }
}