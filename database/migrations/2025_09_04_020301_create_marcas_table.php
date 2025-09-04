<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->id(); // chave primária
            $table->string('nome'); // campo texto
            $table->string('CNPJ')->unique();  
            $table->timestamps(); // created_at e updated_at
        });
    }

};
