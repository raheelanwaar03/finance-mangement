<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trancations', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('customer_id')->unique();
            $table->string('amount');
            $table->string('description');
            $table->string('sum');
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
        Schema::dropIfExists('trancations');
    }
};
