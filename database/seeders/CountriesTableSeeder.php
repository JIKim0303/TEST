<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names= [
            'China', 'Japan', 'TibetChina',
            'UK', 'FranceBelgique', 'France',
            'Italy', 'Mediterranean', 'Germany',
            'Croatia', 'Ireland', 'Switzerland',
            'America', 'Mexico', 'Africa'
        ];

        foreach ($names as $name) {
            if($name == 'China') {
                Country::create([
                    'name' => '中国'
                ]);
            }

            if($name == 'Japan') {
                Country::create([
                    'name' => '日本'
                ]);
            }

            if($name == 'TibetChina') {
                Country::create([
                    'name' => 'チベット(中国)'
                ]);
            }

            if($name == 'UK') {
                Country::create([
                    'name' => 'イギリス'
                ]);
            }

            if($name == 'FranceBelgique') {
                Country::create([
                    'name' => 'フランス・ベルギー'
                ]);
            }

            if($name == 'France') {
                Country::create([
                    'name' => 'フランス'
                ]);
            }

            if($name == 'Italy') {
                Country::create([
                    'name' => 'イタリア'
                ]);
            }

            if($name == 'Mediterranean') {
                Country::create([
                    'name' => '中央地中海沿岸地域'
                ]);
            }

            if($name == 'Germany') {
                Country::create([
                    'name' => 'ドイツ'
                ]);
            }

            if($name == 'Croatia') {
                Country::create([
                    'name' => 'クロアチア・ダルメシア地方'
                ]);
            }

            if($name == 'Ireland') {
                Country::create([
                    'name' => 'アイルランド'
                ]);
            }

            if($name == 'Switzerland') {
                Country::create([
                    'name' => 'スイス'
                ]);
            }

            if($name == 'America') {
                Country::create([
                    'name' => 'アメリカ'
                ]);
            }

            if($name == 'Mexico') {
                Country::create([
                    'name' => 'メキシコ'
                ]);
            }

            if($name == 'Africa') {
                Country::create([
                    'name' => '中央アフリカ'
                ]);
            }
        }



        // $areas = [
        //     'Asia', 'Europe', 'Africa',
        //     'Oceania', 'NorthAmerica', 'SouthAmerica',
        // ];

        // foreach ($areas as $area) {
        //     if($area == 'Asia') {
        //         Country::create([
        //             'name' => '中国', '日本', 'チベット（中国）'
        //         ]);
        //     }

        //     if($name == 'Europe') {
        //         Country::create([
        //             'name' => 'フランス', 'フランス・ベルギー', 'イタリア',
        //             '中央地中海沿岸地域', 'ドイツ', 'クロアチア・ダルメシア地方',
        //             'イギリス', 'アイルランド', 'スイス'
        //         ]);
        //     }

        //     if($name == 'Africa') {
        //         Country::create([
        //             'name' => '中央アフリカ'
        //         ]);
        //     }

        //     if($name == 'Oceania') {
        //         Country::create([
        //             'name' => ''
        //         ]);
        //     }

        //     if($name == 'Oceania') {
        //         Country::create([
        //             'name' => ''
        //         ]);
        //     }

        //     if($name == 'NorthAmerica') {
        //         Country::create([
        //             'name' => 'アメリカ'
        //         ]);
        //     }

        //     if($name == 'SouthAmerica') {
        //         Country::create([
        //             'name' => 'メキシコ'
        //         ]);
        //     }
        // }



    }
}
