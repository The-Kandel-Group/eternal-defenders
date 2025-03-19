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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_category_id')->nullable();
            $table->string('title');
            $table->text('sub_title')->nullable();
            $table->text('description')->nullable();//text-area
            $table->string('icon_fa')->nullable();
            $table->integer('position')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->foreign('service_category_id')->references('id')->on('service_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
