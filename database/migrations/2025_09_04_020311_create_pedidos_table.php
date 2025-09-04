<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id(); // chave primária
            $table->string('usuario'); // campo texto
            $table->string('cod_rastreio'); 
            $table->string('produto'); 
            $table->timestamps(); // created_at e updated_at
        });
    }

};
