<?php

declare(strict_types=1);

namespace AcmeCorp\ReferenceExtension;

use Bolt\Extension\BaseExtension;

class Extension extends BaseExtension
{
    public function getName(): string
    {
        return 'AcmeCorp ReferenceExtension';
    }

    public function initialize(): void
    {
        $config = $this->getConfig();

        $widget = new WeatherWidget();
        $widget->setLocation($config->get('location'));

        $this->widgets->registerWidget($widget);
    }
}