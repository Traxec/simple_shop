<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsAttrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods__attrs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('goods_id')->unsigned();
            $table->foreign('goods_id')->references('id')->on('goods');
            $table->integer('attr_key')->unsigned();
            $table->foreign('attr_key')->references('id')->on('attr_keys');
            $table->integer('attr_value')->unsigned();
            $table->foreign('attr_value')->references('id')->on('attr_values');
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
        Schema::dropIfExists('goods__attrs');
    }
}
