<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('maintenance_requests', function (Blueprint $table) {
            $table->id();
            $table->string('date');//auto generated
            $table->string('property_type');
            $table->string('plot_number');
            $table->string('block');
            $table->string('location');
            $table->string('city');
            $table->string('price');
            $table->string('category');
            $table->string('paid_status');
            $table->string('c_type');
            $table->string('contact_number');
            $table->string('client_name');
            $table->foreignId('property_id')->constrained('properties')->cascadeOnDelete();
            $table->text('description');
            $table->string('status')->default('open');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('maintenance_requests');
    }
};
