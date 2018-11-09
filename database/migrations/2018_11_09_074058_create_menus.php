<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenus extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string(' menu_title');
            $table->timestamps();
            $table->string('cuisions');
            $table->string('status');
            $table->time('starttime');
            $table->time('endtime');
            $table->string('effective_days');
            $table->date('effective_from');
            $table->date('discontinued_on');
            $table->string('menu_icon');
            $table->unsignedInteger('restaurant_id');
            $table->foreign('restaurant_id')->references('id')->on('restaurants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('menus');
    }

}
