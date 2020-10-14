<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['district_id', 'school_id', 'title', 'firstname', 'lastname', 'othername',
        'gender', 'dob', 'marital_status', 'nationality', 'residential_address', 'email', 'mobile_number',
        'ssnit_number', 'college_attended', 'college_location', 'college_from', 'college_to', 'college_certificate', 'course_offered',
        'staff_id', 'registered_number',
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
