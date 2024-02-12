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
            $table->bigInteger('by_company_rents_id');
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
            $table->integer('kum_bowl');
            $table->integer('kum_flasche');
            $table->integer('kum_glas');
            $table->integer('kum_thermo_gr');
            $table->integer('kum_thermo_kl');
            $table->integer('kum_back_box');
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
