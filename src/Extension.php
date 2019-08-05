<?php

declare(strict_types=1);

namespace AcmeCorp\ReferenceExtension;

use Bolt\Extension\BaseExtension;

class Extension extends BaseExtension
{
    /**
     * Return the full name of the extension
     */
    public function getName(): string
    {
        return 'AcmeCorp ReferenceExtension';
    }

    /**
     * Ran automatically, you can use this method to set up things in your
     * extension.
     *
     * Note: This runs on every request. Make sure what happens here is quick
     * and efficient.
     */
    public function initialize(): void
    {
        $this->registerWidget(new ReferenceWidget());
        $this->registerTwigExtension(new Twig());
    }
}
