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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('sub_title')->nullable();
            $table->text('requirements')->nullable();
            $table->string('location')->nullable();
            $table->enum('employment_type', [null,'full-time', 'part-time', 'contract', 'internship', 'temporary'])->nullable()->default(null);
            $table->string('salary_range')->nullable();
            $table->string('experience_level')->nullable();
            $table->integer('vacancies_count')->default(1);
            $table->date('posted_date')->nullable();
            $table->date('deadline')->nullable();
            $table->text('benefits')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('application_link')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->boolean('status')->default(true);
            $table->integer('position')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
