<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pricing_plans', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Pl. Heti 2 délután');
            $table->string('subtitle')->nullable()->comment('Pl. Kipróbáláshoz ideális');
            $table->unsignedInteger('price')->comment('Ár forintban');
            $table->string('price_unit')->default('Ft/hó');
            $table->json('features')->comment('Szolgáltatások listája JSON tömbként');
            $table->string('sibling_discount')->nullable()->comment('Pl. 3 000 Ft/fő kedvezmény');
            $table->boolean('is_featured')->default(false)->comment('Kiemelt csomag jelölés');
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pricing_plans');
    }
};
