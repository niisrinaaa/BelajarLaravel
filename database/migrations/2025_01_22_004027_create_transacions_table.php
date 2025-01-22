<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('Court_id');
            $table->foreign('Court_id')->references('id')->on('courts');
            $table->string('Name');
            $table->text('Address');
            $table->text('Phone');
            $table->date('date');
            $table->time('Starttime');
            $table->time('Endtime');
            $table->integer('Duration');
            $table->integer('Costume');
            $table->integer('Shoes');
            $table->integer('Total');
            $table->integer('Grandtotal');
            $table->integer('Paytotal');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transacions');
    }
};
