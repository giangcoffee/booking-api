<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    protected $fillable = ['date', 'stock', 'stop_sale', 'partner_id', 'room_id'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }
}
