<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['identifier', 'start_date', 'end_date', 'currency', 'requests', 'comments', 'status', 'total_amount', 'voucher_number', 'partner_id', 'room_id'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }
}
