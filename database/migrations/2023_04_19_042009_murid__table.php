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
        Schema::create("murids", function (Blueprint $table) {
            $table->id("id")->autoIncrement();
            $table->string("gambar")->nullable();
            $table->string("nama");
            $table->string("kelas");
            $table->string("jurusan");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
