<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void {
        Schema::create('post_type', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('evento')->nullable();
            $table->boolean('mentoria')->nullable();
            $table->boolean('vaga_emprego')->nullable();
            $table->boolean('formacao')->nullable();
            $table->boolean('noticia')->nullable();
        });
    }

    public function down(): void {
        Schema::dropIfExists('post_type');
    }
};
