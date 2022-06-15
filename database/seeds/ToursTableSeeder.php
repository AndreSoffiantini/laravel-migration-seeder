<?php

use App\Tour;
use Illuminate\Database\Seeder;

class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tours = [
            [
                'destination' => 'Spain',
                'check-in' => '2022-07-09',
                'check-out' => '2022-07-15',
                'number_of_adults' => 2,
                'number_of_children' => 0,
                'animals_allowed' => true,
                'work_tour' => false,
                'property_type' => 'hotel',
                'rooms' => 1,
                'comodities' => 'lorem ipsum',
                'price_per_night' => 50
            ],
            [
                'destination' => 'France',
                'check-in' => '2022-07-09',
                'check-out' => '2022-07-15',
                'number_of_adults' => 2,
                'number_of_children' => 0,
                'animals_allowed' => true,
                'work_tour' => false,
                'property_type' => 'hotel',
                'rooms' => 1,
                'comodities' => 'lorem ipsum',
                'price_per_night' => 50
            ],
            [
                'destination' => 'Sweden',
                'check-in' => '2022-07-09',
                'check-out' => '2022-07-15',
                'number_of_adults' => 2,
                'number_of_children' => 0,
                'animals_allowed' => true,
                'work_tour' => false,
                'property_type' => 'hotel',
                'rooms' => 1,
                'comodities' => 'lorem ipsum',
                'price_per_night' => 50
            ]
        ];

        foreach ($tours as $tour) {
            $new_tour = new Tour();
            $new_tour->destination = $tour['destination'];
            //$new_tour->check_in = $tour['check_in'];
            //$new_tour->check_out = $tour['check_out'];
            $new_tour->number_of_adults = $tour['number_of_adults'];
            $new_tour->number_of_children = $tour['number_of_children'];
            $new_tour->animals_allowed = $tour['animals_allowed'];
            $new_tour->work_tour = $tour['work_tour'];
            $new_tour->property_type = $tour['property_type'];
            $new_tour->rooms = $tour['rooms'];
            $new_tour->comodities = $tour['comodities'];
            $new_tour->price_per_night = $tour['price_per_night'];
        }
    }
}
