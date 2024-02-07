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
        Schema::create('lawers', function (Blueprint $table) {
            $table->id();
            $table->string('lfirm');
            $table->string('lname');
            $table->string('laddress');
            $table->string('lnumber');
            $table->string('lemail');
            $table->string('ldetails');
            $table->string('llanguage');
            $table->string('lcategory');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawers');
    }
};
