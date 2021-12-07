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
            $table->string('name');
            $table->integer('price');
            $table->integer('disc');
            $table->text('description');
            $table->text('interfaces')->nullable();
            
            $table->string('graphics_card')->nullable();
            $table->string('processor')->nullable();
            $table->string('display')->nullable();

            $table->string('ram')->nullable();
            $table->string('hardisk')->nullable();
            $table->string('ssd')->nullable();
            
            $table->string('keyboard')->nullable();
            $table->string('camera')->nullable();
            $table->string('wifi')->nullable();
            $table->string('speaker')->nullable();
            
            $table->string('weight');
            $table->string('slug');
            $table->string('main_image');
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
