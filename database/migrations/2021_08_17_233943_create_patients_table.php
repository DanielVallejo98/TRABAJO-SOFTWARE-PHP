<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientslis', function (Blueprint $table) {
            $table->id();
            $table->string('documento',20);
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->string('genero',10);
            $table->string('eps',20);
            $table->string('genero',20);
            $table->string('coltotal',20);
            $table->string('HDL',20);
            $table->string('LDL',20);
            $table->string('trigliceridos',20);
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
        Schema::dropIfExists('patientslis');
    }
}
