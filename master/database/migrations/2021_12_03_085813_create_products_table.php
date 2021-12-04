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
            $table->string('name')->nullable();
            $table->integer('price')->nullable();
            $table->integer('disc')->nullable();
            $table->text('description')->nullable();
            $table->string('display_size')->nullable();
            $table->string('display_resolution')->nullable();
            $table->string('processor')->nullable();
            $table->string('ram')->nullable();
            $table->string('slug')->nullable();
            $table->string('main_image')->nullable();
            $table->foreignId('brand_id')->constrained('brands');
            $table->foreignId('category_id')->constrained('categories');
            $table->timestamps();
            $table->softdeletes();
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
