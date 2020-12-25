<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGarageservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garageservices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('garage_id')->constrained('garageinfo');
            $table->foreignId('service_id')->constrained('services');
            $table->string('price', 50);
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
        Schema::dropIfExists('garageservices');
    }
}
