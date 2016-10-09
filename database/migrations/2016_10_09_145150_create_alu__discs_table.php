<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAluDiscsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alu__discs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alunos_id')->unsigned();
            $table->foreign('alunos_id')->references('id')->on('alunos');     
            $table->integer('disciplinas_id')->unsigned();
            $table->foreign('disciplinas_id')->references('id')->on('disciplinas');     
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
        Schema::dropIfExists('alu__discs');
    }
}
