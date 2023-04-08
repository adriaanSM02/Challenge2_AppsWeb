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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId("customer_id");
            $table->foreignId("staff_id");
            $table->float("total");
            $table->float("subtotal");
            $table->float("vat");
            $table->string("status");
            $table->string("notes");
            $table->dateTime("dateNtime");
            $table->string("photo1");
            $table->string("photo2");
            $table->integer("active");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
