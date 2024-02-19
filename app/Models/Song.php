<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Song extends Model
{
    protected $table = "song";

    public function artist(): HasOne
    {
        return $this->hasOne('App\Models\Artist','id','artist_id');
    }
}
