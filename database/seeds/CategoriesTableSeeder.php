<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'rent' => 'Аренда',
            'sale' => 'Продажа',
            'commercial-real-estate' => 'Коммерческая недвижимость',
            'residential-real-estate' => 'Жилая недвижимость',
            'new-buildings' => 'Новостройки',
            'secondary-real-estate-market' => 'Вторичный рынок',
        ];

        $index = 1;
        foreach ($categories as $slug => $category_name) {

            Category::create([
                'display_name' => $category_name,
                'order' => $index,
                'slug' => $slug,
            ]);
            $index++;
        }

    }
}
