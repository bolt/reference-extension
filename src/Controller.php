<?php

declare(strict_types=1);

namespace AcmeCorp\ReferenceExtension;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class Controller extends AbstractController
{
    public function index($name = 'foo'): Response
    {
        $context = [
            'title' => 'AcmeCorp Reference Extension',
            'name' => $name,
        ];

        return $this->render('@reference-extension/page.html.twig', $context);
    }
}
