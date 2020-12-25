<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGarageinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garageinfo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')->constrained('customers');
            $table->string('garage_name', 100);
            $table->string('garage_city', 50);
            $table->string('garage_state', 50);
            $table->string('opening_time', 50);
            $table->string('closing_time', 50);
            $table->string('garage_type', 50);
            $table->string('garage_address', 500);
            $table->boolean('is_service_center');
            $table->string('service_center_type', 50);
            $table->string('service_center_brand', 50);
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
        Schema::dropIfExists('garageinfo');
    }
}
