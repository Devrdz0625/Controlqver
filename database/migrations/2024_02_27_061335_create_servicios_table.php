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
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->string('categoria');       
            $table->string('servicio');
            $table->string('cantidad');
            $table->string('cliente');
            $table->decimal('monto', 8, 2);
            $table->string('archivo');
            $table->string('realizo');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
