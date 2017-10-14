<?php namespace Awebsome\Products;

use Event;
use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function boot(){
        Event::listen('backend.menu.extendItems', function($manager) {

            $manager->addSideMenuItems('Awebsome.Crm', 'crm', [
              'products' => [
                  'label'   => trans('awebsome.products::lang.plugin.name'),
                  'icon'    => 'oc-icon-archive',
                  'order'   => 556,
                  'url'     => Backend::url('awebsome/products/products'),
              ]
            ]);
        });
    }
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
