<?php

use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [
            'hryvnia' => 'грн.',
            'dollar' => '$',
            'euro' => '€',
        ];

        foreach ($currencies as $cur_name => $cur_disp_name) {
            Currency::create([
                'name'=>$cur_name,
                'display_name'=>$cur_disp_name,
            ]);
        }
    }
}
