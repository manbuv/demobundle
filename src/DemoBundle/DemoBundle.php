<?php

namespace DemoBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\Extension\Bundle\Traits\PackageVersionTrait;

class DemoBundle extends AbstractPimcoreBundle
{
    use PackageVersionTrait;

    const PACKAGE_NAME = 'manbuv/demo';

    public function getComposerPackageName()
    {
        return self::PACKAGE_NAME;
    }

    public function getVersion()
    {
        return 'v1.0.0';
    }
}
