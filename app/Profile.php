<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['country', 'pic', 'user_id'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user');
    }
}
