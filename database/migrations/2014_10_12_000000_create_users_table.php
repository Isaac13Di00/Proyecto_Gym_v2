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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('sexo', ['Masculino', 'Femenino', 'Otro'])->nullable(false);
            $table->date('fecha_nac')->nullable(false);
            $table->enum('tipo_sangre', ['A+','A-','B+','B-','AB+','AB-','O+','O-'])->nullable(false);
            $table->string('telefono', 10)->nullable(false);
            $table->string('calle', 100)->nullable(false);
            $table->string('colonia', 100)->nullable(false);
            $table->string('cp', 5)->nullable(false);

            $table->boolean('isAdmin')->nullable(false);            

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
