<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['name','father_name','mother_name',
        'present_address','parmanent_address','national_id','mobile_number',
        'email','gender','blood_group','ssc','hsc','hounars_subject','masters_subject',
        'ssc_result','hsc_result','hounars_result','masters_result','image','resume_image'
    ];
}
