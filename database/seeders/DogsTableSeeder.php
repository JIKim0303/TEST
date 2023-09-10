<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Dog;

class DogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'ウェルシュ・コーギー・ペンブローク', 'ウィペット',
            'バセンジー', 'パグ'
        ];

    foreach($names as $name) {
        if($name == 'ウェルシュ・コーギー・ペンブローク') {
            Dog::create([
                'name' => 'ウェルシュ・コーギー・ペンブローク',
                'image' => asset('storage/corgi.jpg'),
                'purpose' => '牧羊犬',
                'color' => 'レッドかセーブル、フォーン、ブラック・アンド・タンの単色',
                'character' => "神経質だったり、攻撃的ではなく、大胆で、働き者。外向的で、友好的。",
                'history' => "ウェルシュ・コーギー・ペンブロークは、1107年までさかのぼることができる古い犬種。
                ペンブロークの直系の祖先犬は、フランドルの織工がウェールズに移住した時や、ヴァイキングが活躍していたころ、スウェーデンの犬がこの地に居残ったものともいわれている。古くはヘンリー二世（1133～1189）、現代においては英国王室に愛され、王室の犬といえばこの犬種と思われているほど。おもにウェールズのペンブロークシャー地方で飼育されていた。"
            ]);
        }
    }
    }
}

