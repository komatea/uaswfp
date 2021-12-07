<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

     //Set guarde & fillable 
     protected $fillable = [
        'orderdate',
        'grand_total',
        'customer_id',
        'employee_id'
    ];
    
    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
    
    public function employee()
    {
        return $this->belongsTo(User::class, 'employee_id');
    }

    public function orderdetails()
    {
        return $this->belongsToMany(Product::class, 'orderdetails', 'order_id', 'product_id')
        ->withPivot(["qty","subtotal"])->as('orderdetails');
    }
}
