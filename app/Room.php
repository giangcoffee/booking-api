<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['identifier', 'name', 'description', 'partner', 'reservable'];

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }
}
