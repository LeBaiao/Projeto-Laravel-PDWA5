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
        Schema::create('equipamento_esportivos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tipo', 50);
            $table->string('material', 50);
            $table->date('data_fabricacao');
            $table->decimal('peso', 5,2);
            $table->boolean('novo');
            $table->string('cor', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipamento_esportivos');
    }
};
