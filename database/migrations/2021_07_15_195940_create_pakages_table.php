<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePakagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakages', function (Blueprint $table) {
            $table->id();
            $table->string('name_package', 50);
            $table->string('cost', 10);
            $table->string('duration_day', 10);
            $table->text('descrition');
            $table->string('place', 100);
            $table->string('type_locality', 100);
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
        Schema::dropIfExists('pakages');
    }
}
