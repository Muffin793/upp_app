<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('brand_id')->unsigned();

            $table->foreign('category_id')->references('id')->on('product_categories')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('brand_id')->references('id')->on('brands')
            ->onDelete('cascade')
            ->onUpdate('cascade');   

            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
