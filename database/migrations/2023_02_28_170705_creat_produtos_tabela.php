<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('produtos', function (Blueprint $table){
            $table->id();
            $table->string('nome');
            $table->string('descricao');
            $table->string('preco');
            $table->integer('quantidade');
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');
            $table->string('imagem');
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
        //
    }
};
