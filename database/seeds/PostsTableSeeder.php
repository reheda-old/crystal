<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Post::create([
            'user_id'=>'1',
            'client_id'=>'1',
            'category_id'=>'1',
            'title' => '3 К. Ул. Библика, 1-Г',
            'excerpt' => 'Продам 3 к. квартиру на ул.  Библика, 1-Г.  Этаж 11/12. Комнаты раздельные. В…',
            'body' => 'Продам 3 к. квартиру на ул.  Библика, 1-Г.  Этаж 11/12. Комнаты раздельные. В кухне и в одной комнате МПО, в 2 комнатах — косметика, остальная площадь под ремонт. Развитая инфраструктура, рядом рынок, супермаркеты , дет. сад, школа.',
            'image' => '',
            'image_slider' => '',
            'slug' => '3-k-ul-biblika-1-g',
            'meta_description' => '',
            'meta_keywords' => 'продам,Библика,3 команты,московский проспект',
            'address' => 'ул.  Библика, 1-Г, кв. 12',
            'floor' => '11',
            'max_floor' => '12',
            'total_area' => '64',
            'residential_area' => '58',
            'kitchen_area' => '8',
            'rooms' => '3',
            'bathrooms' => '1',
            'parking' => '1',
            'balconies' => '1',
            'construction_year' => '2009',
            'price' => '972000',
            'currency_id' => '1',
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
