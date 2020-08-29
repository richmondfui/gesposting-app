<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function schools()
    {
        return $this->hasMany(School::class);
    }

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}
