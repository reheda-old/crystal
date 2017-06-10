<?php

use Illuminate\Database\Seeder;
use App\Models\District;
use App\Helpers\SlugMaker;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = [
            'Индустриальный',
            'Киевский',
            'Коминтерновский',
            'Московский',
            'Октябрьский',
            'Фрунзенский',
            'Холодногорский',
            'Червонозаводской',
            'Шевченковский',
        ];

        foreach ($districts as $district) {
            District::create([
                'name' => SlugMaker::slugify($district),
                'display_name' => $district
            ]);
        }
    }
}
