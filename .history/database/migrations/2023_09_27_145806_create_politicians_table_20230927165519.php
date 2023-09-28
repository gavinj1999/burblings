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
        Schema::create('politicians', function (Blueprint $table) {
            $table->id();
            $table->integer('memberId');
            $table->string('fullTitle');
            $table->integer('partyId');
            $table->string('backgroundColor');
            $table->string('foregroundColor');
            $table->string('gender');
            $table->string('thumbnail');
            $table->integer('membershipConstituencyID');
            $table->dateTime('membershipStart');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('politicians');
    }
};
