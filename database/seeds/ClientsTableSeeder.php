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
        ]);

        Client::create([
            'user_id' => '2',
            'type_client_id' => '4',
            'surname' => 'Малышева',
            'name' => 'Надежда',
            'middle_name' => 'Олеговна',
            'phone' => '0638888888',
            'email' => 'malisheva@test.test',
        ]);

        Client::create([
            'user_id' => '2',
            'type_client_id' => '2',
            'surname' => 'Полуторная',
            'name' => 'Ольга',
            'middle_name' => 'Александровна',
            'phone' => '0637777777',
            'email' => 'polutornaya@test.test',
        ]);
    }
}
