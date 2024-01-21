<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    const SONG = 'song';

    public function up(): void
    {
        $callback = function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("artist");
            $table->string("album");
            $table->integer("year");
            $table->timestamps();
        };

        Schema::create(self::SONG, $callback);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(self::SONG);
    }
};
