<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Area;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names= [
            'Europe', 'Africa', 'Oceania',
            'NorthAmerica', 'SouthAmerica'
        ];

        foreach ($names as $name) {
            if($name == 'Europe') {
                Area::create([
                    'name' => 'Europe'
                ]);
            }

            if($name == 'Africa') {
                Area::create([
                    'name' => 'Africa'
                ]);
            }

            if($name == 'Oceania') {
                Area::create([
                    'name' => 'Oceania'
                ]);
            }

            if($name == 'NorthAmerica') {
                Area::create([
                    'name' => 'NorthAmerica'
                ]);
            }

            if($name == 'SouthAmerica') {
                Area::create([
                    'name' => 'SouthAmerica'
                ]);
            }
        }
    }
}
