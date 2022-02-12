<?php

namespace App\Http\Controllers;

use App\Models\StafType;
use Illuminate\Http\Request;

class StafTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stafType = StafType::orderBy('id','asc')->paginate(10);
        return view('backend.staftype.type',compact('stafType'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        StafType::create($data);
        return redirect()->back()->with('stutus','Data created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StafType  $stafType
     * @return \Illuminate\Http\Response
     */
    public function show(StafType $stafType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StafType  $stafType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $staf = StafType::find($id);
        return view('backend.staftype.staf_edit',compact('staf'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StafType  $stafType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->all();
        $staf = StafType::find($id);
        $staf->update($data);
        return redirect()->back()->with('stutus','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StafType  $stafType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = StafType::find($id);
        $data->delete();
        return redirect()->back()->with('delete','Data has been deleted');
    }
}
