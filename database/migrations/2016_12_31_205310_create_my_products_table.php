<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_farmer');
            $table->integer('id_product');
            $table->double('modal',11,2);
            $table->double('price_per_units',11,2);
            $table->date('plant_date');
            $table->date('harvest_date_predict');
            $table->date('harvest_date')->nullable();
            $table->string('harvest_status');
            $table->integer('harvest_amount');
            $table->string('units');
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
        Schema::dropIfExists('my_products');
    }
}
