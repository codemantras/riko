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
    $table->double('credit');
    $table->double('bonus');
    $table->double('loaded');
    $table->double('free_play');
    $table->text('remarks')->nullable();
    $table->double('reedem');
    $table->double('tips');
    $table->double('cashout');
    $table->foreignId('source_id')->constrained('sources');
    $table->foreignId('platform')->constrained('platfroms');
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
