<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();  
            $table->string('actividad');
            $table->text('descripcion');
            $table->timestamp('fecha_creacion')->useCurrent();
            $table->timestamp('fecha_ultima_actualizacion')->useCurrent()->nullable();
            $table->enum('estatus', ['Realizada', 'Pendiente', 'No Realizada'])->default('Pendiente');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
