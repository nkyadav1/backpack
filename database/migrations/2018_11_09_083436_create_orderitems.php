<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderitems extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('orderitems', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('item_name');
            $table->string('item_type');
            $table->string('measureunit');
            $table->float('quantity');
            $table->decimal('unitprice');
            $table->integer('discount');
            $table->decimal('discountamount');
            $table->decimal('total');
            $table->boolean('is_favourite');
            $table->string('updated_by',50);
            $table->string('created_by',50);
            $table->integer('order_id');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->unsignedInteger('menuitem_id');
            $table->foreign('menuitem_id')->references('id')->on('menuitems');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('orderitems');
    }

}
