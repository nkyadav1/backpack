<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdditionalColumnsToOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('dinetime');            
        });
        Schema::table('orders', function (Blueprint $table) {
            $table->string('restaurant_name');
            $table->date('dine_date');
            $table->bigInteger('mobile');
            $table->string('email');
            $table->dropColumn('dinetime');
            $table->time('dinetime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
