<?php

namespace App\Http\Controllers;

use App\Models\StudentType;
use Illuminate\Http\Request;

class StudentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $studentType = StudentType::orderBy('name','asc')->paginate(10);
        return view('backend.studentType.index',compact('studentType'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.studentType.create');
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
        $data = $request->all();
        StudentType::create($data);
        return redirect()->back()->with('stutus','Data created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentType  $studentType
     * @return \Illuminate\Http\Response
     */
    public function show(StudentType $studentType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentType  $studentType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $studentType = StudentType::find($id);
        return view('backend.studentType.edit',compact('studentType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentType  $studentType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $data = $request->all();
        $studentType = StudentType::find($id);
        $studentType->update($data);
        return redirect()->back()->with('stutus','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentType  $studentType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = StudentType::find($id);
        $data->delete();
        return redirect()->back()->with('delete','Data has been deleted');
    }
}
