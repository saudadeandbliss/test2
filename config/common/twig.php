<?php

declare(strict_types=1);

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

return [
    Environment::class => function (): Environment {
        $loader = new FilesystemLoader(__DIR__ . '/../../templates');
        $twig = new Environment($loader, [
            __DIR__ . '/../../tmp/Twig'
        ]);
        return $twig;
    },
];
