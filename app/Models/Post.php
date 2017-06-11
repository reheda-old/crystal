<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Get the value of the model's route key.
     *
     * @return mixed
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'client_id',
        'category_id',
        'title',
        'seo_title',
        'excerpt',
        'body',
        'image',
        'image_slider',
        'slug',
        'meta_description',
        'meta_keywords',
        'address',
        'district_id',
        'floor',
        'max_floor',
        'total_area',
        'residential_area',
        'kitchen_area',
        'rooms',
        'bathrooms',
        'parking',
        'balconies',
        'construction_year',
        'wall_type_id',
        'price',
        'currency_id',
        'views',
        'exported',
        'published',
        'published_at',
        'featured',
        'delivered',
    ];


}
