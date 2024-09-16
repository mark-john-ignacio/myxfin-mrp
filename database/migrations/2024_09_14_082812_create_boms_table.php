<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('boms', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->enum('bom_type', ['Standard/Manufacture', 'WIP']);
            $table->integer('quantity');
            $table->string('uom');
            $table->foreignId('inventory_id')->constrained('inventory')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('boms');
    }
};
