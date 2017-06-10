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
            'user_id' => '1',
            'client_id' => '1',
            'category_id' => '2',
            'title' => '3 К. Ул. Библика, 1-Г',
            'excerpt' => 'Продам 3 к. квартиру на ул.  Библика, 1-Г.  Этаж 11/12. Комнаты раздельные. В…',
            'body' => 'Продам 3 к. квартиру на ул.  Библика, 1-Г.  Этаж 11/12. Комнаты раздельные. В кухне и в одной комнате МПО, в 2 комнатах — косметика, остальная площадь под ремонт. Развитая инфраструктура, рядом рынок, супермаркеты , дет. сад, школа.',
            'image' => '',
            'image_slider' => '',
            'slug' => '3-k-ul-biblika-1-g',
            'meta_description' => '',
            'meta_keywords' => 'продам,Библика,3 команты,московский проспект',
            'address' => 'ул.  Библика, 1-Г, кв. 12',
            'district_id' => '6',
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

        Post::create([
            'user_id' => '2',
            'client_id' => '2',
            'category_id' => '1',
            'title' => '3 К. Ул. Сумская, 126',
            'excerpt' => 'Сдам шикарную 3 к. квартиру в самом центре на ул. Сумская, 126. Квартира…',
            'body' => 'Сдам шикарную 3 к. квартиру в самом центре на ул. Сумская, 126. Квартира укомплектована всей необходимой мебелью и техникой. 3-й этаж.',
            'image' => '',
            'image_slider' => '',
            'slug' => '3-k-ul-sumskaya-126',
            'meta_description' => '',
            'meta_keywords' => 'аренда,Сумская 126,центр,Харьков',
            'address' => 'Ул. Сумская, 126, кв. 54',
            'district_id' => '9',
            'floor' => '3',
            'max_floor' => '5',
            'total_area' => '71',
            'kitchen_area' => '12',
            'rooms' => '3',
            'bathrooms' => '1',
            'balconies' => '2',
            'construction_year' => '1998',
            'price' => '27000',
            'currency_id' => '2',
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        Post::create([
            'user_id' => '2',
            'client_id' => '3',
            'category_id' => '2',
            'title' => '2 К. Ул. Данилевского, 19а',
            'excerpt' => 'Продам 2 к. квартиру в ЖК Восток-Запад на ул. Данилевского, 19а. Этаж…',
            'body' => 'Продам 2 к. квартиру в ЖК Восток-Запад на ул. Данилевского, 19а. Этаж 7/12. В квартире выполнен качественный ремонт с применением лучших отделочных материалов, с использованием дерева и натурального камня. Сантехника, мебель ведущих мировых производителей. Кухня совмещённая с гостиной , 2 с/у, балкон и просторная лоджия. Ремонту 1 год, состояние новой квартиры.',
            'image' => '',
            'image_slider' => '',
            'slug' => '2-k-ul-danilevskogo-19a-2',
            'meta_description' => '',
            'meta_keywords' => 'продажа квартиры,Данилевского 19а,почти центр,Харьков',
            'address' => 'Ул. Данилевского, 19а, кв. 11',
            'district_id' => '2',
            'floor' => '7',
            'max_floor' => '12',
            'total_area' => '81',
            'residential_area' => '70',
            'rooms' => '2',
            'bathrooms' => '2',
            'wall_type_id' => '1',
            'parking' => '1',
            'price' => '4968000',
            'currency_id' => '1',
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
