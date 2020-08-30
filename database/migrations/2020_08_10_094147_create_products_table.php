<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            
            $table->string('asin',100)->nullable();
            $table->longText('title',100);
            $table->text('sku')->nullable();
            $table->string('brand',100);
            $table->longText('description')->nullable();
            $table->longText('image',100);
            $table->longText('category');
            $table->decimal('price');
            $table->decimal('margin')->nullable();
            $table->integer('wc_product_id')->nullable();
            $table->integer('wc_category_id')->nullable();
            $table->enum('status', [0,1]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
