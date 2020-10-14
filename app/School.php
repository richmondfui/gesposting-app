<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = ['user_id','district_id','name','headteacher','location'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}
