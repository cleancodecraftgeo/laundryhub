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
    Schema::create('currencies', function (Blueprint $table) {
        $table->id();

        $table->string('name'); // USD, GEL, EUR
        $table->string('symbol'); // $, ₾, €

        $table->decimal('value', 10, 4)->default(1);
        // USD = 1, GEL = 2.7 və s.

        $table->string('position')->default('before');
        // before = $50, after = 50₾

        $table->boolean('is_default')->default(false);

        $table->timestamps();
    });
}
};
