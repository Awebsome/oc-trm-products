<?php namespace Awebsome\Products\Models;

use Model;

/**
 * Product Model
 */
class Product extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'awebsome_products_products';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    protected $jsonable = ['questions','features','benefits'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
      'category' => [
           '{/}raviraj/rjgallery/models$',
           'scope' => 'isActive'
       ]
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
