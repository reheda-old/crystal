<?php

use Illuminate\Database\Seeder;
use App\Models\WallType;
use App\Helpers\SlugMaker;

class WallTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'кирпич',
            'силикатный кирпич',
            'панель',
            'пеноблок',
            'монолит',
            'ракушечник (ракушняк)',
            'монолитно-кирпичный',
            'монолитно-блочный',
            'дерево и кирпич',
            'инкерманский камень',
            'бутовый камень',
            'газобетон',
            'керамзитобетон',
            'монолитно-каркасный',
            'керамический блок',
        ];

        foreach ($types as $type){
            WallType::create([
                'name' => SlugMaker::slugify($type),
                'display_name' => $type,
            ]);
        }

    }
}
