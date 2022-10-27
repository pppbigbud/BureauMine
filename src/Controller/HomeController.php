<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\ImgRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ArticleRepository $articleRepository, ImgRepository $imgRepository): Response
    {

//        dd($imgRepository);
//        dd($articleRepository);

        return $this->render('home/index.html.twig', [
            'articles' => $articleRepository->findAll(),
//            'images' => $imgRepository->findAll(),
        ]);
    }
}
