<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//TODO: Parte 1, Comando php artisan make:migration add_photo_column_on_users_table --table=users
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('photo',255)->nullable();
        });
    }
//TODO:Parte 2, Comando php después de los comandos photo: php artisan migrate, ese es para que agregue la columna foto
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
