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
            $table->string('ServiceName');
            $table->decimal('ServicePrice', 8, 2);
            $table->integer('ServiceSessionCount');
            $table->integer('ServiceDuration');
            $table->text('ServiceDescription')->nullable();
            $table->boolean('ServiceIsActive')->default(true);
            $table->timestamps();

            // Foreign key to service_categories table
            $table->unsignedBigInteger('service_category_id');
            $table->foreign('service_category_id')->references('id')->on('service_categories')->onDelete('cascade');
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
