<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('scholarship_contents', function (Blueprint $table) {
            $table->id();
            $table->string('country')->unique(); // identifies which country this belongs to
            $table->string('heading1')->nullable();
            $table->text('paragraph1')->nullable();
            $table->string('heading2')->nullable();
            $table->text('paragraph2')->nullable();
            $table->string('heading3')->nullable();
            $table->text('paragraph3')->nullable();
            $table->string('heading4')->nullable();
            $table->text('paragraph4')->nullable();
            $table->string('heading5')->nullable();
            $table->text('paragraph5')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('scholarship_contents');
    }
};
