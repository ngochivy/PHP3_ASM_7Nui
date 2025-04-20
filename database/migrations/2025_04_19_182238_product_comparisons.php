<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_comparisons', function (Blueprint $table) {
            $table->id();
            $table->string('session_id')->unique()->comment('ID phiên làm việc của khách');
            $table->timestamps();

            // Index cho session_id vì sẽ query thường xuyên
            $table->index('session_id');
        });

        Schema::create('product_comparison_items', function (Blueprint $table) {
            $table->unsignedBigInteger('comparison_id');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();

            $table->primary(['comparison_id', 'product_id']); // Composite primary key
            $table->foreign('comparison_id')->references('id')->on('product_comparisons')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_comparison_items');
        Schema::dropIfExists('product_comparisons');
    }
};
