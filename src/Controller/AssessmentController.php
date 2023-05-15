<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class AssessmentController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $controller = new ArticleController();
        $response = $controller->getArticle()->getContent();
        return $this->render('article/homepage.html.twig',['title' => json_decode($response) -> content->node->title,'content' => json_decode($response) -> content->node->body->value]);
    }
}