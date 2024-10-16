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
        $table->string('admin_id')->nullable();
        $table->string('category_id')->nullable();
        $table->string('name')->nullable();
        $table->string('in_stock')->nullable();
        $table->string('is_available')->nullable();
        $table->string('price')->nullable();
        $table->string('discounted_price')->nullable();
        $table->string('slug')->nullable();
        $table->string('is_on_sale')->default(0);
        $table->string('is_featured')->default(0);
        $table->text('description')->nullable();
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
