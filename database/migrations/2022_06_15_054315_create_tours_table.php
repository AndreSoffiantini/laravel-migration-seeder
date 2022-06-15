<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('destination', 100);
            //$table->date('check_in');
            //$table->date('check_out');
            $table->tinyInteger('number_of_adults');
            $table->tinyInteger('number_of_children');
            $table->boolean('animals_allowed')->default(false);
            $table->boolean('work_tour')->default(false);
            $table->string('property_type', 50);
            $table->tinyInteger('rooms');
            $table->text('comodities');
            $table->decimal('price_per_night', 5, 2 );
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
        Schema::dropIfExists('tours');
    }
}
