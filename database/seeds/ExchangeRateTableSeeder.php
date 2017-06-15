<?php

use Illuminate\Database\Seeder;
use App\Models\ExchangeRate;

class ExchangeRateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExchangeRate::create([
            'date'=>'2017-06-12',
            'dollar_rate' => '26.457345',
            'euro_rate' =>'29.4544',
        ]);
        ExchangeRate::create([
            'date'=>'2017-06-13',
            'dollar_rate' => '26.35354',
            'euro_rate' =>'29.2356',
        ]);
        ExchangeRate::create([
            'dollar_rate' => '26.156657',
            'euro_rate' =>'29.143454',
        ]);
    }
}
