<?php

use App\Models\Invoice;
use App\Models\Tour;
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
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Invoice::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Tour::class)->constrained()->onDelete('cascade');
            $table->string('tour_name');
            $table->string('tour_sku');
            $table->date('checkin'); 
            $table->date('checkout');  
            $table->string('extra_feature');
            $table->integer('quantity');
            $table->float('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_details');
    }
};