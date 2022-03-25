<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAxleWeightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('axle_weights', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrements();
            $table->float('AxleWeight_1');
            $table->float('AxleWeight_2');
            $table->float('AxleWeight_3');
            $table->float('AxleWeight_4');
            $table->string('AxleWeight_5');
            $table->BigInt('wim_id');
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
        Schema::dropIfExists('axle_weights');
    }
}
