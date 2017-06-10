<?php

use Illuminate\Database\Seeder;

class WallTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wall_types')->insert([
            [
                'name' => 'кирпич',
                'display_name' => 'кирпич',
            ],
            [
                'name' => 'силикатный кирпич',
                'display_name' => 'силикатный кирпич',
            ],
            [
                'name' => 'панель',
                'display_name' => 'панель',
            ],
            [
                'name' => 'пеноблок',
                'display_name' => 'пеноблок',
            ],
            [
                'name' => 'монолит',
                'display_name' => 'монолит',
            ],
            [
                'name' => 'ракушечник (ракушняк)',
                'display_name' => 'ракушечник (ракушняк)',
            ],
            [
                'name' => 'монолитно-кирпичный',
                'display_name' => 'монолитно-кирпичный',
            ],
            [
                'name' => 'монолитно-блочный',
                'display_name' => 'монолитно-блочный',
            ],
            [
                'name' => 'дерево и кирпич',
                'display_name' => 'дерево и кирпич',
            ],
            [
                'name' => 'инкерманский камень',
                'display_name' => 'инкерманский камень',
            ],
            [
                'name' => 'бутовый камень',
                'display_name' => 'бутовый камень',
            ],
            [
                'name' => 'газобетон',
                'display_name' => 'газобетон',
            ],
            [
                'name' => 'керамзитобетон',
                'display_name' => 'керамзитобетон',
            ],
            [
                'name' => 'монолитно-каркасный',
                'display_name' => 'монолитно-каркасный',
            ],
            [
                'name' => 'керамический блок',
                'display_name' => 'керамический блок',
            ],
        ]);
    }
}
