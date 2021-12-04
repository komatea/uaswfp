<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $dateFormat = 'U';

     //Set guarde & fillable 
     protected $fillable = [
        'name',
        'price',
        'disc',
        'description',
        'display_size',
        'display_resolution',
        'processor',
        'ram',
        'slug',
        'main_image',
        'category_id',
        'brand_id'
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
        return $this->hasMany(ImageProduct::class, 'produk_id');
    }

    public function orderdetails()
    {
        return $this->belongsToMany(Order::class, 'orderdetails', 'product_id', 'order_id');
    }
    
    public function takeImage()
    {
        return "/storage/images/products/" . $this->filename;
    }

}
