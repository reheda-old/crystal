<?php

use Illuminate\Database\Seeder;
use App\Models\UserStat;

class UserStatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserStat::create([
            'user_id' => 2,
            'date' => '2017-06-13',
            'cabinet_spend_time' => 2656,
            'offered_properties' => 0,
            'added_clients' => 0,
            'added_posts' => 3,
        ]);
        UserStat::create([
            'user_id' => 2,
            'date' => '2017-06-15',
            'cabinet_spend_time' => 124,
            'offered_properties' => 4,
            'added_clients' => 1,
            'added_posts' => 0,
        ]);
    }
}
