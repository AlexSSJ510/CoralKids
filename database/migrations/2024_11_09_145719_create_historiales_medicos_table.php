<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialesMedicosTable extends Migration
{
    public function up()
    {
        Schema::create('historiales_medicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paciente_id');
            $table->dateTime('fecha');
            $table->text('diagnostico');
            $table->text('tratamiento');
            $table->text('motivo_consulta');
            $table->text('enfermedad_actual');
            $table->text('observaciones');
            $table->timestamps();

            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('historiales_medicos');
    }
}