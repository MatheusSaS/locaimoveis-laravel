<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImoveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->id();
            $table->string('cidade');
            $table->string('bairro');
            $table->string('descricao');
            $table->string('operacao')->nullable();
            $table->string('image')->nullable();
            $table->string('images')->nullable();
            $table->unsignedInteger('dormitorios')->default(0);
            $table->unsignedInteger('suites')->default(0);
            $table->unsignedInteger('vagas_garagem')->default(0);
            $table->unsignedInteger('area_util')->default(0);
            $table->decimal('valor')->nullable(); 
            $table->decimal('IPTU')->default(0);
            $table->decimal('condominio')->default(0);
            $table->bigInteger('tipo_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imoveis');
    }
}
