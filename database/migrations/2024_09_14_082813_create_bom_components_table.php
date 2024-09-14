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
        Schema::create('bom_components', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bom_id')->constrained('bom')->onDelete('cascade');
            $table->string('component_name');
            $table->decimal('quantity', 10, 2);
            $table->string('uom');
            $table->enum('item_type', ['Raw', 'WIP']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bom_components');
    }
};
