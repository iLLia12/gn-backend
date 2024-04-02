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
        Schema::create('filterables', function (Blueprint $table) {
            $table->bigInteger('filter_id')->unsigned();
            $table->bigInteger('filterable_id')->unsigned();
            $table->string('filterable_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filterables');
    }
};
