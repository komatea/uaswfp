<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $dateFormat = 'U';

     //Set guarde & fillable 
     protected $fillable = [
        'name',
    ];
    public function users()
    {
        return $this->hasMany(User::class, 'user_id');
    }
}
