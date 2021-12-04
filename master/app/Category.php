<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $dateFormat = 'U';

     //Set guarde & fillable 
     protected $fillable = [
        'nama',
        'logo_image'
    ];
    public function products()
    {
        return $this->hasMany(Product::class, 'product_id');
    }
}
