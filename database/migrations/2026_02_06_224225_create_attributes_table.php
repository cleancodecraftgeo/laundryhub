<?php

use App\Enums\AttributeStatusEnum;
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
        Schema::create('attributes', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('unit_id')
            ->constrained('units')->cascadeOnDelete();
            $table->foreignUlid('category_id')
            ->constrained('categories')->cascadeOnDelete();
            $table->string('key');
            $table->string('label_en');
            $table->string('label_ge')->nullable();
            $table->enum('status',AttributeStatusEnum::cases())
            ->default(AttributeStatusEnum::ACTIVE->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attributes');
    }
};
