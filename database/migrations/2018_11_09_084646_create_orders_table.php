<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customername');
            $table->unsignedinteger('restaturant_id');
            $table->integer('guests');
            $table->datetime('dinetime');
            $table->decimal('grandtotal');
            $table->decimal('discount');
            $table->string('offer_code');
            $table->string('offer_description');
            $table->decimal('booking charges');
            $table->boolean('is_favourite');
            $table->text('remarks');
            $table->string('status');
            $table->datetime('confirmed_at');
            $table->string('confirmed_by');
            $table->integer('rating');
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
        Schema::dropIfExists('orders');
    }
}
