<?php

use Illuminate\Database\Seeder;
use App\Models\TypeClient;

class TypeClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'landlord' => 'арендодатель',
            'tenant' => 'арендатор',
            'seller' => 'собственник',
            'buyer' => 'покупатель',
        ];

        foreach ($types as $name => $disp_name) {
            TypeClient::create([
                'name' => $name,
                'display_name' => $disp_name,
            ]);
        }
    }
}
