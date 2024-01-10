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
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->integer('gel_bowl');
            $table->integer('gel_flasche');
            $table->integer('gel_glas');
            $table->integer('gel_thermo_gr');
            $table->integer('gel_thermo_kl');
            $table->integer('gel_back_box');
            $table->integer('zur_bowl');
            $table->integer('zur_flasche');
            $table->integer('zur_glas');
            $table->integer('zur_thermo_gr');
            $table->integer('zur_thermo_kl');
            $table->integer('zur_back_box');
            $table->integer('diff_bowl');
            $table->integer('diff_flasche');
            $table->integer('diff_glas');
            $table->integer('diff_thermo_gr');
            $table->integer('diff_thermo_kl');
            $table->integer('diff_back_box');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rents');
    }
};
