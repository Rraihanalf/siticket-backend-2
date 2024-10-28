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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('corpu_area');
            $table->string('kode_barang');
            $table->string('name_model');
            $table->string('type_model');
            $table->string('manufacture')->nullable();
            $table->string('group');
            $table->string('sub_group')->nullable();
            $table->enum('condition', ['good', 'not good', 'broken']);
            $table->string('serial_number')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('quantity')->default('1');
            $table->enum('status_barang', ['open', 'closed'])->default('open');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
