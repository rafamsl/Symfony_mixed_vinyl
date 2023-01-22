<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController
{
    #[Route('/')]
    public function homepage():Response{
        return new Response('My first Symfony route');
    }
    #[Route('/browse/{genre}')]
    public function browse(string $genre = null) : Response{
        if($genre){
            $response = 'Browse the colection for '.$genre;
        } else {
            $response = 'Browse the colection for all genres';
        }

        return new Response($response);
    }
}
