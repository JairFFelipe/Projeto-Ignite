<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('modelos', function (Blueprint $table) {
            $table->id(); // chave primária
            $table->string('nome'); // campo texto
            $table->string('categoria'); 
            $table->string('marca'); 
            $table->string('produto'); 
            $table->timestamps(); // created_at e updated_at
        });
    }

};
