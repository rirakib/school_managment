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
        $male_parcent = $total_male/$total_students*100;
        $female_parcent = $total_female/$total_students*100;
        return view('backend.dashboard.index',compact('total_students','total_teachers','total_male','total_female',
        'male_parcent','female_parcent'
    ));
    }
}
