<?php

namespace Shopware\Themes\Frontvape;

use Shopware\Components\Form as Form;

class Theme extends \Shopware\Components\Theme
{
    protected $extend = 'Responsive';

    protected $name = <<<'SHOPWARE_EOD'
Frontvape
SHOPWARE_EOD;

    protected $description = <<<'SHOPWARE_EOD'
Theme for Frontvape based on the Responsive theme.
SHOPWARE_EOD;

    protected $author = <<<'SHOPWARE_EOD'
Julian Weiland
SHOPWARE_EOD;

    protected $license = <<<'SHOPWARE_EOD'
MIT
SHOPWARE_EOD;

    public function createConfig(Form\Container\TabContainer $container)
    {
    }
}