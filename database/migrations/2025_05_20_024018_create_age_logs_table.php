<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('age_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('age_entered');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('age_logs');
    }
};