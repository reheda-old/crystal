<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(WallTypesTableSeeder::class);
        $this->call(ClientTypesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(ClientHistoriesTableSeeder::class);
        $this->call(UserTasksTableSeeder::class);
    }
}
