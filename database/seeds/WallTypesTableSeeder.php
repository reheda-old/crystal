<?php

use Illuminate\Database\Seeder;
use App\Models\WallType;

class WallTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WallType::create([
            'name' => 'кирпич',
            'display_name' => 'кирпич',
        ]);

        WallType::create([
            'name' => 'силикатный кирпич',
            'display_name' => 'силикатный кирпич',
        ]);

        WallType::create([
            'name' => 'панель',
            'display_name' => 'панель',
        ]);

        WallType::create([
            'name' => 'пеноблок',
            'display_name' => 'пеноблок',
        ]);

        WallType::create([
            'name' => 'монолит',
            'display_name' => 'монолит',
        ]);

        WallType::create([
            'name' => 'ракушечник (ракушняк)',
            'display_name' => 'ракушечник (ракушняк)',
        ]);

        WallType::create([
            'name' => 'монолитно-кирпичный',
            'display_name' => 'монолитно-кирпичный',
        ]);

        WallType::create([
            'name' => 'монолитно-блочный',
            'display_name' => 'монолитно-блочный',
        ]);

        WallType::create([
            'name' => 'дерево и кирпич',
            'display_name' => 'дерево и кирпич',
        ]);

        WallType::create([
            'name' => 'инкерманский камень',
            'display_name' => 'инкерманский камень',
        ]);

        WallType::create([
            'name' => 'бутовый камень',
            'display_name' => 'бутовый камень',
        ]);

        WallType::create([
            'name' => 'газобетон',
            'display_name' => 'газобетон',
        ]);

        WallType::create([
            'name' => 'керамзитобетон',
            'display_name' => 'керамзитобетон',
        ]);

        WallType::create([
            'name' => 'монолитно-каркасный',
            'display_name' => 'монолитно-каркасный',
        ]);

        WallType::create([
            'name' => 'керамический блок',
            'display_name' => 'керамический блок',
        ]);

    }
}
