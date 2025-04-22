<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController
{
    #[Route('/articles', name:"list_articles")]
    public function listArticles()
    {
        var_dump('salut'); die;
    } 
}
