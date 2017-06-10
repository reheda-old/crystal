<?php

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([

            'user_id' => '1',
            'type_client_id' => '4',
            'surname' => 'Клиентская',
            'name' => 'Анна',
            'middle_name' => 'Сидоровна',
            'phone' => '0639999999',
            'email' => 'clientskaya@test.test',
            'history' => '{
                {
                    "date": "2017-05-28 10:02:00",
                    "action": "Уточнил детали сделки, договорились созвонится 2 июня в 9 утра"
                }, 
                
                {
                    "date": "2017-06-02 13:13:43",
                    "action": "Договорились встетится 10 числа на 3 часа дня"
                }, 
                
                {
                    "date": "2017-06-10 17:02:10",
                    "action": "Встретились, обсудили. Покупку оформим через неделю"
                }
            }',
        ]);

        Client::create([
            'user_id' => '2',
            'type_client_id' => '4',
            'surname' => 'Малышева',
            'name' => 'Надежда',
            'middle_name' => 'Олеговна',
            'phone' => '0638888888',
            'email' => 'malisheva@test.test',
            'history' => '{
                {
                    "date": "2017-04-13 10:44:11",
                    "action": "Отправил предложения клиенту"
                }, 
                
                {
                    "date": "2017-04-22 11:12:02",
                    "action": "Встретились и обсудили юр. вопросы"
                }, 
                
                {
                    "date": "2017-04-26 14:42:09",
                    "action": "Осуществили сделку"
                }
            }',
        ]);

        Client::create([
            'user_id' => '2',
            'type_client_id' => '2',
            'surname' => 'Полуторная',
            'name' => 'Ольга',
            'middle_name' => 'Александровна',
            'phone' => '0637777777',
            'email' => 'polutornaya@test.test',
            'history' => '{
                {
                    "date": "2017-06-07 15:33:07",
                    "action": "Созвонились и обсудили варианты"
                }
            }',
        ]);
    }
}
