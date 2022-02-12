<?php

namespace App\Http\Controllers;

use App\Models\Staf;
use Illuminate\Http\Request;

class StafController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $staf = Staf::orderBy('id','asc')->paginate(10);
        return view('backend.staftype.index',compact('staf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.staftype.create');
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
        $staf = new Staf();
        $staf->name = $request->name;
        $staf->father_name = $request->father_name;
        $staf->mother_name = $request->mother_name;
        $staf->mobile_number = $request->mobile_number;
        $staf->present_address = $request->present_address;
        $staf->staf_type = $request->staf_type;
        $staf->parmanent_address = $request->parmanent_address;
        $staf->email = $request->email;
        $staf->gender = $request->gender;
        $staf->blood_group = $request->blood_group;
        $staf->national_id = $request->national_id;
        $staf->ssc = $request->ssc;
        $staf->ssc_result = $request->ssc_result;
        $staf->hsc_result = $request->hsc_result;
        $staf->hsc = $request->hsc;
        $staf->hounars_subject = $request->hounars_subject;
        $staf->hounars_result = $request->hounars_result;
        $staf->masters_subject = $request->masters_subject;
        $staf->masters_result = $request->masters_result;
       
        if($request->hasFile('image') && $request->hasFile('resume_image'))
        {
            $image = $request->file('image');
            $image_extention = $image->getClientOriginalExtension();
            $image_name = time().'.'.$image_extention;
            $image->move('images/staf/image', $image_name);
            $staf->image = $image_name;

            $resume_image = $request->file('resume_image');
            $resume_extention = $resume_image->getClientOriginalExtension();
            $resume_image_name = time().'.'.$resume_extention;
            $resume_image->move('images/staf/resume', $resume_image_name);
            $staf->resume_image = $resume_image_name;
            
        }
       
        $staf->save();
        return redirect()->back()->with('stutus','Data created successfullly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staf  $staf
     * @return \Illuminate\Http\Response
     */
    public function show(Staf $staf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staf  $staf
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $staf = Staf::find($id);
        return view('backend.staftype.edit',compact('staf'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staf  $staf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $data = $request->all();
        $staf = Staf::find($id);
        $staf->update($data);
        return redirect()->back()->with('stutus','Data update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staf  $staf
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Staf::find($id);
        $data->delete();
        return redirect()->back()->with('delete','Data has been deleted');
    }
}
