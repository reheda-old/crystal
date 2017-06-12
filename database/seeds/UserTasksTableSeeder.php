<?php

use Illuminate\Database\Seeder;
use App\Models\UserTask;

class UserTasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserTask::create([
            'user_id' => 2,
            "task" => "Позвонить клиенту Добруновской 26.05 в 9 утра",
            "date" => "2017-05-26 09:00:00",
            "status" => "PENDING",
        ]);
        UserTask::create([
            'user_id' => 2,
            'client_id' => 2,
            "task" => "Встретится на след неделе",
            "date" => "2017-05-30 10:00:00",
            "status" => "PENDING",
        ]);
    }
}
