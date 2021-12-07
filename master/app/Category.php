<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    
    protected $table = 'categories';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

     //Set guarde & fillable 
     protected $fillable = [
        'name',
        'slug'
    ];
    
    public function products()
    {
        return $this->hasMany(Product::class, 'product_id');
    }
}
