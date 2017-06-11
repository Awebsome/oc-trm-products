<?php namespace Awebsome\Products\Components;

use Cms\Classes\ComponentBase;
use Awebsome\Products\Models\Product as ProductModel;

class Product extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Products',
            'description' => 'Product by SF ID'
        ];
    }

    public function defineProperties()
    {
        return [
            'id' => [
                'title'       => 'awebsome.products::lang.label.salesforce_id',
                'description' => 'awebsome.products::lang.label.id_desc',
                'default'     => '{{ :id }}',
                'type'        => 'string'
            ]
        ];
    }

    public function getProduct()
    {
        $product = ProductModel::where('salesforce_id', $this->property('id'))->first();

        if($product)
          return $product;
    }
}
