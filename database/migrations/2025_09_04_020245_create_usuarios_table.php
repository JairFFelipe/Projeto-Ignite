<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
        public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id(); // chave primária
            $table->string('nome'); // campo texto
            $table->string('email')->unique(); 
            $table->string('senha'); 
            $table->string('num')->unique(); 
            $table->char('cpf', 11)->unique(); 
            $table->char('cep', 8);
            $table->timestamps(); // created_at e updated_at
        });
    }

};
