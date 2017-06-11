<?php namespace Awebsome\Products;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Awebsome\Products\Components\Product' => 'ocTrmProduct'
        ];
    }

    public function registerSettings()
    {
    }
}
