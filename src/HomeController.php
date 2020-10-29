<?php

namespace Source;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\Twig;

class HomeController
{
    private $view;

    public function __construct()
    {

    }
    
    public function home(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
      // your code here
      // use $this->view to render the HTML
      // ...
      $response->getBody()->write('Hello there');
      
      return $response;
    }
}