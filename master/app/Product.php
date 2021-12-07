<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

     //Set guarde & fillable 
     protected $fillable = [
        'name',
        'price',
        'disc',
        'description',
        'interfaces',
        'graphics_card',
        'processor',
        'display',
        'ram',
        'hardisk',
        'ssd',
        'keyboard',
        'camera',
        'wifi',
        'speaker',
        'weight',
        'slug',
        'main_image',
        'brand_id',
        'category_id',
    ];
    
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function imageProducts()
    {
        return $this->hasMany(ImageProduct::class, 'product_id');
    }

    public function orderdetails()
    {
        return $this->belongsToMany(Order::class, 'orderdetails', 'product_id', 'order_id');
    }
    
    public function takeImage()
    {
        return "/storage/images/products/" . $this->main_image;
    }


}
