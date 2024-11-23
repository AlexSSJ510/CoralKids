<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialesMedicosTable extends Migration
{
    public function up()
    {
        Schema::create('historiales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paciente_id'); // Clave foránea a la tabla pacientes
            $table->dateTime('fecha');
            $table->string('diagnostico', 255);
            $table->text('tratamiento');
            $table->text('observaciones')->nullable();
            $table->timestamps();

            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('historiales_medicos');
    }
}