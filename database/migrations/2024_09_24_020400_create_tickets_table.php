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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor');
            $table->string('email_pelapor');
            $table->string('sektor');
            $table->enum('kategori', ['kritis', 'tinggi', 'sedang', 'rendah'])->default('rendah');
            $table->text('keluhan');
            $table->enum('keterangan', ['open', 'closed'])->default('open');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
