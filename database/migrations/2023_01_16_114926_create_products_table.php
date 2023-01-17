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
            $table->id()->autoIncrement();
            $table->string('artikul', 50);
            $table->integer('buhta_id');
            $table->integer('category_id');
            $table->integer('collection_id');
            $table->string('name', 200);
            $table->string('title', 255);
            $table->string('description', 255);
            $table->string('alias', 255);
            $table->text('content');
            $table->integer('group_id');
            $table->integer('sort');
            $table->integer('hide');
            $table->integer('new');
            $table->integer('sale');
            $table->integer('material_id');
            $table->integer('color_id');
            $table->integer('block_id');
            $table->integer('format_id');
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
