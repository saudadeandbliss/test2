<?php

declare(strict_types=1);

namespace App\Http\Action;

use App\Http\HtmlResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Twig\Environment;

class HomeAction implements RequestHandlerInterface
{
    private Environment $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $response = new HtmlResponse($this->twig->render('Hello.twig'));

        return $response;
    }
}
