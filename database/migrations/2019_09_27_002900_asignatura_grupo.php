<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AsignaturaGrupo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignatura_grupo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('asignatura_id')->unsigned();
            $table->integer('grupo_id')->unsigned();
            $table->foreign('asignatura_id')
            ->references('id')
            ->on('asignaturas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('grupo_id')
            ->references('id')
            ->on('grupos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('asignatura_grupo');
    }
}
