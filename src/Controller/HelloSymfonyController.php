<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HelloSymfonyController {

    #[Route('/hello')]
    public function helloSymfony () {
        return new Response('Hello Symfony!');
    }
}
