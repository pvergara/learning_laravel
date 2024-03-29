<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    const SONG = 'song';
    const ARTIST = 'artist';

    public function up(): void
    {
        $callback = function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->bigInteger("artist_id")->unsigned();
            $table->string("album");
            $table->integer("year");
            $table->timestamps();
            $table->foreign('artist_id')->references('id')->on(self::ARTIST)->onDelete('cascade');
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
