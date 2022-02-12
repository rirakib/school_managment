<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $student = Student::orderBy('name','asc')->paginate(10);
        return view('backend.student.index',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $student = new Student();
        $validated = $request->validate([
            'unique_id' => 'required | unique:students'
        ]);
        $student->unique_id = $request->unique_id;
        $student->name = $request->name;
        $student->father_name = $request->father_name;
        $student->mother_name = $request->mother_name;
        $student->birth_certificate_number = $request->birth_certificate_number;
        $student->present_address = $request->present_address;
        $student->family_income = $request->family_income;
        $student->total_family_member = $request->total_family_member;
        $student->parmanent_address = $request->parmanent_address;
        $student->mobile_number = $request->mobile_number;
        $student->date_of_birth = $request->date_of_birth;
        $student->gender = $request->gender;
        $student->blood_group = $request->blood_group;
        $student->admission_class = $request->admission_class;
        $student->group = $request->group;
        $student->student_types = $request->student_types;
        $student->shift = $request->shift;
        $student->psc_result = $request->psc_result;
        $student->jsc_result = $request->jsc_result;
        if($request->hasFile('image') && $request->hasFile('birth_image')){

            $s_image = $request->image;
            $f_image = $request->father_id;
            $m_image = $request->mother_id;
            $b_image = $request->birth_image;

            $s_extension = $s_image->getClientOriginalExtension();
            $f_extension = $f_image->getClientOriginalExtension();
            $m_extension = $m_image->getClientOriginalExtension();
            $b_extension = $b_image->getClientOriginalExtension();


            $s_name = time().'.'.$s_extension;
            $f_name = time().'.'.$f_extension;
            $m_name = time().'.'.$m_extension;
            $b_name = time().'.'.$b_extension;

            $s_image->move('images/student/image', $s_name);
            $f_image->move('images/student/fatherid', $f_name);
            $m_image->move('images/student/motherid', $m_name);
            $b_image->move('images/student/birthid', $b_name);

            $student->image = $s_name;
            $student->father_id = $f_name;
            $student->mother_id = $m_name;
            $student->birth_image = $b_name;
        }
        $student->save();
        return redirect()->back()->with('stutus','Data create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
