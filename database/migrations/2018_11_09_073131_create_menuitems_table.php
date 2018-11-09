<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menuitems', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('item_name',100);
            $table->string('item_image',100);
            $table->string('itemtype',50);
            $table->json('subitems');
            $table->string('measureunit',20);
            $table->decimal('originalprice',8,2);
            $table->decimal('effectiveprice',8,2);
            $table->decimal('discount',5,2);
            $table->decimal('discountvalue',8,2);
            $table->text('description');
            $table->string('status');
            $table->boolean('soldout');
            $table->unsignedInteger('menu_id');
            $table->foreign('menu_id')->references('id')->on('menus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menuitems');
    }
}
