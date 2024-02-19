<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    const ARTIST = 'artist';

    public function up(): void
    {
        $callback = function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
        };

        Schema::create(self::ARTIST, $callback);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(self::ARTIST);
    }
};

