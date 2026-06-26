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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->nullable()->references('id')->on('clients')->onDelete('set null');
            $table->string('photo_path')->nullable(); //Foto
            $table->string('name'); //Nome
            $table->string('specie')->nullable(); //Espécie
            $table->string('breed')->nullable(); //Raça
            $table->string('color')->nullable(); //Cor
            $table->decimal('height', 12, 3)->nullable(); //Altura
            $table->decimal('weight', 12, 3)->nullable(); //Peso
            $table->string('gender')->nullable(); //Sexo
            $table->date('birth_date')->nullable(); //Data de Nascimento
            $table->string('father')->nullable(); //Pai
            $table->string('mother')->nullable(); //Mãe
            $table->text('observations')->nullable(); //Observações
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
