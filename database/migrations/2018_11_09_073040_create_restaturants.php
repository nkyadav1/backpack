<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaturants extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name', 100);
            $table->string('phone');
            $table->string('status',50);
            $table->string('is_available');
            $table->string('address', 100);
            $table->string('landmark', 50);
            $table->string('city', 25);
            $table->string('state', 20);
            $table->string('description', 255);
            $table->string('latitude', 25);
            $table->string('longitude', 25);
            $table->json('amenities');
            $table->string('taxno');
            $table->string('payments_terms');
            $table->string('localities');
            $table->string('manager_name', 50);
            $table->string('manager_phone', 15);
            $table->string('owner_name', 50);
            $table->string('owner_phone', 15);
            $table->integer('pincode');
            $table->string('updated_by');
            $table->string('created_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('restaturants');
    }

}
