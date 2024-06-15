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
        Schema::create('bookregistrations', function (Blueprint $table) {
            $table->id();
            // $table->string('package');
            $table->string('month');
            $table->string('passenger');
            $table->string('package_price');
            $table->string('parti1_name');
            $table->string('parti1_bg');
            $table->string('parti1_mobile');
            $table->string('parti1_gender');
            $table->string('parti1_age');
            $table->string('parti2_name')->nullable();
            $table->string('parti2_bg')->nullable();
            $table->string('parti2_mobile')->nullable();
            $table->string('parti2_gender')->nullable();
            $table->string('parti2_age')->nullable();
            $table->string('parti3_name')->nullable();
            $table->string('parti3_bg')->nullable();
            $table->string('parti3_mobile')->nullable();
            $table->string('parti3_gender')->nullable();
            $table->string('parti3_age')->nullable();
            $table->string('parti4_name')->nullable();
            $table->string('parti4_bg')->nullable();
            $table->string('parti4_mobile')->nullable();
            $table->string('parti4_gender')->nullable();
            $table->string('parti4_age')->nullable();
            $table->string('parti5_name')->nullable();
            $table->string('parti5_bg')->nullable();
            $table->string('parti5_mobile')->nullable();
            $table->string('parti5_gender')->nullable();
            $table->string('parti5_age')->nullable();
            $table->string('parti6_name')->nullable();
            $table->string('parti6_bg')->nullable();
            $table->string('parti6_mobile')->nullable();
            $table->string('parti6_gender')->nullable();
            $table->string('parti6_age')->nullable();
            $table->string('total_payment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookregistrations');
    }
};
