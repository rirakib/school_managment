<?php

namespace App\Http\Controllers;

use App\Models\StuClass;
use Illuminate\Http\Request;

class StuClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $class = StuClass::orderBy('id','desc')->paginate(10);
        return view('backend.class.index',compact('class'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.class.create');
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
        StuClass::create($data);
        return redirect()->back()->with('stutus','Data create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StuClass  $stuClass
     * @return \Illuminate\Http\Response
     */
    public function show(StuClass $stuClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StuClass  $stuClass
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $class = StuClass::find($id);
        return view('backend.class.edit',compact('class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StuClass  $stuClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $data = $request->all();
        $stuClass = StuClass::find($id);
        $stuClass->update($data);
        return redirect()->back()->with('stutus','Data update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StuClass  $stuClass
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = StuClass::find($id);
        $data->delete();
        return redirect()->back()->with('delete','Data has been deleted');
    }
}
