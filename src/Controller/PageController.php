<?php

namespace App\Controller;  //je déclare l'espace de nom de la classe PageController

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;  //j'importe la classe AbstractController de Symfony
//et l'AbstractController sert à créer des contrôleurs dans Symfony
use Symfony\Component\HttpFoundation\Response;  //j'importe la classe Response de Symfony
use Symfony\Component\Routing\Annotation\Route;  //j'importe la classe Route de Symfony



class PageController extends AbstractController  //je crée une classe PageController qui étend la classe AbstractController de Symfony
{
    #[Route("/", name: "home")]  //je crée une route qui correspond à la racine de l'application et qui appelle la méthode home
    public function home(): Response //je crée une méthode home qui renvoie une réponse HTTP
    {
        return $this->render('home.html.twig'); //je renvoie le fichier home.html.twig
    }

    #[Route('/contact', name:"contact")] //je crée une route qui correspond à /contact et qui appelle la méthode contact
    public function contact(): Response //je crée une méthode contact qui renvoie une réponse HTTP
    {
        return $this->render('contact.html.twig'); //je renvoie le fichier contact.html.twig
    }

    #[Route('/a-propos', name:"about")] //je crée une route qui correspond à /a-propos et qui appelle la méthode about
    public function about(): Response //je crée une méthode about qui renvoie une réponse HTTP
    {
        return $this->render('about.html.twig'); //je renvoie le fichier about.html.twig
    }

    #[Route('/delete', name:"delete")] //je crée une route qui correspond à /delete et qui appelle la méthode delete
    public function delete(): Response //je crée une méthode delete qui renvoie une réponse HTTP
    {
        return $this->render('delete.html.twig'); //je renvoie le fichier delete.html.twig
    }
}

