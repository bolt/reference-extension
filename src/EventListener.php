<?php

declare(strict_types=1);

namespace AcmeCorp\ReferenceExtension;

use Symfony\Component\HttpKernel\Event\ResponseEvent;

class EventListener
{
    public function handleEvent(ResponseEvent $e): void
    {
        $content = $e->getResponse()->getContent();
        $content .= "\n<!-- It works! -->\n";

        $response->setContent($content);
    }
}
