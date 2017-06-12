<?php

use Illuminate\Database\Seeder;
use App\Models\ClientHistory;

class ClientHistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ClientHistory::create([
            'client_id' => 1,
            "action" => "Уточнил детали сделки, договорились созвонится 2 июня в 9 утра",
            "date" => "2017-05-28 10:02:00",
        ]);
        ClientHistory::create([
            'client_id' => 1,
            "action" => "Договорились встетится 10 числа на 3 часа дня",
            "date" => "2017-06-02 13:13:43",
        ]);
        ClientHistory::create([
            'client_id' => 1,
            "action" => "Встретились, обсудили. Покупку оформим через неделю",
            "date" => "2017-06-10 17:02:10",
        ]);


        ClientHistory::create([
            'client_id' => 2,
            "action" => "Отправил предложения клиенту",
            "date" => "2017-04-13 10:44:11",
        ]);
        ClientHistory::create([
            'client_id' => 2,
            "action" => "Встретились и обсудили юр. вопросы",
            "date" => "2017-04-22 11:12:02",
        ]);
        ClientHistory::create([
            'client_id' => 2,
            "action" => "Осуществили сделку",
            "date" => "2017-04-26 14:42:09",
        ]);


        ClientHistory::create([
            'client_id' => 3,
            "action" => "Созвонились и обсудили варианты",
            "date" => "2017-06-07 15:33:07",
        ]);
    }
}
