<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StuClass;
use App\Models\Group;
use App\Models\StudentType;
use App\Models\Shift;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['name','father_name','mother_name','family_income','total_family_member','birth_certificate_number',
    'present_address','parmanent_address','mobile_number','father_id','date_of_birth',
    'mother_id','gender','blood_group','admission_class','group','student_types',
    'shift','psc_result','jsc_result','birth_image','image'
    ];

    public function admission_class(){
        return $this->belongsTo(StuClass::class,'admission_class');
    }
    public function group(){
        return $this->belongsTo(Group::class,'group');
    }
    public function student_types(){
        return $this->belongsTo(StudentType::class,'student_type');
    }
    public function shift(){
        return $this->belongsTo(Shift::class,'shift');
    }
}

            
            