<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'email'];

    public function profile()
    {
        return $this->hasOne(Profile::class, 'user');
    }
}
