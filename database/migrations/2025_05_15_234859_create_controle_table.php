<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('controle', function (Blueprint $table) {
            $table->string('descricao');           
            $table->float('valor');
            $table->enum('tipo', ['RECEITA'], ['DESPESA']);
            $table->date('data');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('carteira_id');
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('carteira_id')->references('id')->on('carteiras');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('controle');
    }
};
