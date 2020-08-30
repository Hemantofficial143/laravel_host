<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceSyncMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_sync_masters', function (Blueprint $table) {
            $table->id();
            $table->timestampTz('date_time');
            $table->enum('status',[0,1]);
            $table->bigInteger('no_of_prods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price_sync_masters');
    }
}
