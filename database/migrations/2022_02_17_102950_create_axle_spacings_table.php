<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAxleSpacingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('axle_spacings', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrements();
            $table->varchar('Axles_1');
            $table->varchar('Axles_2');
            $table->varchar('Axles_3');
            $table->varchar('Axles_4');
            $table->float('Distance_1');
            $table->float('Distance_2');
            $table->float('Distance_3');
            $table->float('Distance_4');
            $table->Bigint('wim_id');
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
        Schema::dropIfExists('axle_spacings');
    }
}
