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
    protected $dateFormat = 'U';

     //Set guarde & fillable 
     protected $fillable = [
        'name',
    ];
    public function products()
    {
        return $this->hasMany(Product::class, 'product_id');
    }
}
