<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->string('cust_city', 50);
            $table->string('contact1', 50)->unique();
            $table->string('contact2', 50)->nullable();
            $table->string('cust_gender', 20)->nullable();
            $table->string('cust_mail', 50)->nullable();
            $table->string('cust_whatsapp', 20)->nullable();
            $table->text('cust_password');
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
        Schema::dropIfExists('customers');
    }
}
