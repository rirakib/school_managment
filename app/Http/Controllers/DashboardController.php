<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index(){
        $total_students = DB::table('students')->count();
        $total_teachers = DB::table('teachers')->count();
        $total_male = DB::table('students')->where('gender','male')->count();
        $total_female = DB::table('students')->where('gender','female')->count();
        $male_parcent = round($total_male/$total_students*100,2);
        $female_parcent = round($total_female/$total_students*100,2);
        $scolarship_student = DB::table('students')->where('student_types',1)->count();
        $scolarship_parcent = round($scolarship_student/$total_students*100,2);
        $total_staf = DB::table('stafs')->count();
        return view('backend.dashboard.index',compact('total_students','total_teachers','total_male','total_female',
        'male_parcent','total_staf','female_parcent','scolarship_student','scolarship_parcent'
    ));
    }
}
