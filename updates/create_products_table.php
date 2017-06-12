<?php namespace Awebsome\Products\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('awebsome_products_products', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('salesforce_id')->nullable();
            $table->integer('gallery_id')->nullable();
            $table->integer('before_after_id')->nullable();

            $table->string('name');
            $table->string('title')->nullable();

            $table->longText('feature1')->nullable();
            $table->longText('feature2')->nullable();
            $table->longText('feature3')->nullable();
            $table->longText('feature4')->nullable();
            $table->longText('feature5')->nullable();
            $table->longText('feature6')->nullable();

            $table->longText('benefit1')->nullable();
            $table->longText('benefit2')->nullable();
            $table->longText('benefit3')->nullable();
            $table->longText('benefit4')->nullable();
            $table->longText('benefit5')->nullable();
            $table->longText('benefit6')->nullable();

            $table->longText('question1')->nullable();
            $table->longText('question2')->nullable();
            $table->longText('question3')->nullable();
            $table->longText('question4')->nullable();
            $table->longText('question5')->nullable();
            $table->longText('question6')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('awebsome_products_products');
    }
}
