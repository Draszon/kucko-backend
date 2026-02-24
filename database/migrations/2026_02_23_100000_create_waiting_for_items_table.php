<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('waiting_for_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('icon_type')->nullable()->comment('SVG icon identifier, e.g. clock, clipboard, smile');
            $table->enum('type', ['block', 'list_item'])->default('block')->comment('block = fő tartalom ikon+cím+leírás, list_item = oldalsó kártya elem');
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('waiting_for_items');
    }
};
