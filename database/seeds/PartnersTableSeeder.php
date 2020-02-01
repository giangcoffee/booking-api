<?php

use App\Availability;
use App\Booking;
use App\Partner;
use App\Price;
use App\Room;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Price::truncate();
        Availability::truncate();
        Booking::truncate();
        Partner::truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        factory(Partner::class, 10)->create()->each(function($partner) {
            factory(Room::class, 5)->make()->each(function($room) use($partner) {
                $partner->rooms()->save($room);
                //create prices
                factory(Price::class, 30)->make()->each(function($price) use($room) {
                    $price->room_id = $room->id;
                    $price->partner_id = $room->partner->id;
                    $price->save();
                });

                //create bookings
                factory(Booking::class, 30)->make()->each(function($booking) use($room) {
                    $booking->room_id = $room->id;
                    $booking->partner_id = $room->partner->id;
                    $booking->save();
                });

                //create availabilities
                factory(Availability::class, 30)->make()->each(function($availability) use($room) {
                    $availability->room_id = $room->id;
                    $availability->partner_id = $room->partner->id;
                    $availability->save();
                });
            });
        });
    }
}
