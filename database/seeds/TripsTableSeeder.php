<?php

use Illuminate\Database\Seeder;

use App\Models\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trips = config('db.trips');

        foreach ($trips as $trip) {
            $newTrip = new Trip;
            $newTrip->location = $trip['location'];
            $newTrip->price = $trip['price'];
            $newTrip->duration_days = $trip['duration_days'];
            $newTrip->duration_nights = $trip['duration_nights'];
            $newTrip->accomodation = $trip['accomodation'];
            $newTrip->image = $trip['image'];
            $newTrip->description = $trip['description'];
            $newTrip->save();
        }
    }
}
