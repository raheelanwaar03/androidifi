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
        Schema::create('admin_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('min_invest');
            $table->string('max_invest');
            $table->string('min_roi_per');
            $table->string('max_roi_per');
            $table->string('min_roi_profit');
            $table->string('max_roi_profit');
            $table->string('expiry');
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_plans');
    }
};
