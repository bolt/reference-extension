<?php

declare(strict_types=1);

namespace AcmeCorp\ReferenceExtension;

class EventListener
{
    public function handleEvent($e): void
    {
        echo '<h2>It Works!</h2>';
    }
}
