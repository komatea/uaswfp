<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
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
    public function users()
    {
        return $this->hasMany(User::class, 'user_id');
    }
}
