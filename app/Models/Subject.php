<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StuClass;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = ['subject','class_id'];

    public function class(){
        return $this->belongsTo(StuClass::class,'class_id');
    }
}
