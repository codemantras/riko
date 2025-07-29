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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->date('date');
            $table->time('time');
            $table->decimal('credit', 10, 2);
            $table->decimal('bonus', 10, 2);
            $table->decimal('loaded', 10, 2);
            $table->decimal('free_play', 10, 2);
            $table->text('remarks')->nullable();
            $table->decimal('redeem', 10, 2);
            $table->decimal('tips', 10, 2);
            $table->decimal('cashout', 10, 2);
            $table->foreignId('source_id')->constrained('sources');
            $table->foreignId('platform_id')->constrained('platforms');
            $table->foreignId('tag_id')->constrained('tags');
            $table->foreignId('employee_id')->constrained('employees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
