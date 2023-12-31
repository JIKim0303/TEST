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
        $areas = [
            'アジア', 'ヨーロッパ', '北米', '南米', 'アフリカ', 'オセアニア', 
        ];
        
        $asias = [
            '中国', '日本', 'チベット(中国)'
        ];
        
        $europes = [
            'イギリス', 'フランス・ベルギー', 'フランス', 'イタリア',
            '中央地中海沿岸地域', 'ドイツ', 'クロアチア・ダルメシア地方',
            'アイルランド', 'スイス'
        ];
        
        $namericas = [
            'アメリカ'
        ];
        
        $samericas = [
            'メキシコ'
        ];
        
        $africas = [
            '中央アフリカ'
        ];

        $oceanias = [
            
        ];
        
        foreach ($areas as $area) {
            if ($area == 'アジア') {
                foreach ($asias as $asia) {
                    Area::create([
                        'name' => $asia,
                        'area' => $area
                    ]);
                }
            }

            if ($area == 'ヨーロッパ') {
                foreach ($europes as $europe) {
                    Area::create([
                        'name' => $europe,
                        'area' => $area
                    ]);
                }
            }

            if ($area == '北米') {
                foreach ($namericas as $namerica) {
                    Area::create([
                        'name' => $namerica,
                        'area' => $area
                    ]);
                }
            }

            if ($area == '南米') {
                foreach ($samericas as $samerica) {
                    Area::create([
                        'name' => $samerica,
                        'area' => $area
                    ]);
                }
            }

            if ($area == 'アフリカ') {
                foreach ($africas as $africa) {
                    Area::create([
                        'name' => $africa,
                        'area' => $area
                    ]);
                }
            }

            if ($area == 'オセアニア') {
                foreach ($oceanias as $oceania) {
                    Area::create([
                        'name' => $oceania,
                        'area' => $area
                    ]);
                }
            }
        }
    }
}
