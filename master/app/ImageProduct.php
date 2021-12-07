<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImageProduct extends Model
{
    use SoftDeletes;
    
    protected $table = 'image_products';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

     //Set guarde & fillable 
     protected $fillable = [
        'filename',
        'product_id'
    ];
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function takeImage()
    {
        return "/storage/images/products/" . $this->filename;
    }
}
