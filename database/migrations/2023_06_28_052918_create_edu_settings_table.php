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
        Schema::create('edu_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('start_to');
            $table->string('end_to');
            $table->string('university');
            $table->string('description');
            $table->tinyInteger('status')->default('0')->comment('0=active,1=inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edu_settings');
    }
};
