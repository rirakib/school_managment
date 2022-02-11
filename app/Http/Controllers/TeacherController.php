<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teacher = Teacher::orderBy('id','asc')->paginate(10);
        return view('backend.teacher.index',compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       
        $validated = $request->validate([
            'name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'mobile_number' => 'required',
            'gender' => 'required',
            'present_address' => 'required',
            'parmanent_address' => 'required',
            'image' => 'required',
        ]);
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->father_name = $request->father_name;
        $teacher->mother_name = $request->mother_name;
        $teacher->mobile_number = $request->mobile_number;
        $teacher->present_address = $request->present_address;
        $teacher->parmanent_address = $request->parmanent_address;
        $teacher->email = $request->email;
        $teacher->gender = $request->gender;
        $teacher->blood_group = $request->blood_group;
        $teacher->national_id = $request->national_id;
        $teacher->ssc = $request->ssc;
        $teacher->ssc_result = $request->ssc_result;
        $teacher->hsc_result = $request->hsc_result;
        $teacher->hsc = $request->hsc;
        $teacher->hounars_subject = $request->hounars_subject;
        $teacher->hounars_result = $request->hounars_result;
        $teacher->masters_subject = $request->masters_subject;
        $teacher->masters_result = $request->masters_result;
       
        if($request->hasFile('image') && $request->hasFile('resume_image'))
        {
            $image = $request->file('image');
            $image_extention = $image->getClientOriginalExtension();
            $image_name = time().'.'.$image_extention;
            $image->move('images/Teacher/image', $image_name);
            $teacher->image = $image_name;

            $resume_image = $request->file('resume_image');
            $resume_extention = $resume_image->getClientOriginalExtension();
            $resume_image_name = time().'.'.$resume_extention;
            $resume_image->move('images/Teacher/resume', $resume_image_name);
            $teacher->resume_image = $resume_image_name;
            
        }
       
        $teacher->save();
        return redirect()->back()->with('stutus','Data created successfullly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $teacher = Teacher::find($id);
        return view('backend.teacher.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $data = $request->all();
        $teacher = Teacher::find($id);
        $teacher->update($data);
        return redirect()->back()->with('stutus','Data update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
