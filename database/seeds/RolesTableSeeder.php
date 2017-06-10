<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin' => 'Администратор',
            'agent' => 'Агент',
            'secretary' => 'Секретарь',
        ];

        foreach ($roles as $role_name => $role_disp_name) {
            Role::create([
                'name' => $role_name,
                'display_name' => $role_disp_name,
            ]);
        }

    }
}
