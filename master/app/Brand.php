<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;

    protected $table = 'brands';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $dateFormat = 'U';

    //Set guarde & fillable 
    protected $fillable = [
        'name',
        'logo_image'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'product_id');
    }

    public function takeImage()
    {
        return "/storage/images/brands/" . $this->filename;
    }
}
