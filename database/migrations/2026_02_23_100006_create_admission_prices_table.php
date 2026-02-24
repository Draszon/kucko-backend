<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admission_prices', function (Blueprint $table) {
            $table->id();
            $table->string('label')->comment('Pl. Tanszobásoknak, Külsősöknek');
            $table->string('price')->comment('Pl. 2 000 Ft / 90 perc');
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admission_prices');
    }
};
