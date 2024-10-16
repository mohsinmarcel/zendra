<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobiles', function (Blueprint $table) {
        $table->id();
        $table->string('admin_id')->nullable();
        $table->string('brand')->nullable();
        $table->string('slug')->nullable();
        $table->string('model')->nullable();
        $table->string('color')->nullable();
        $table->string('price')->nullable();
        $table->text('images')->nullable();
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
        Schema::dropIfExists('mobiles');
    }
}
