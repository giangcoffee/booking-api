<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = ['date', 'amount', 'partner_id', 'room_id'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }
}
