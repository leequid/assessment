<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AssessmentController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return $this->render('article/homepage.html.twig',['title' => 'asdf']);
    }
}