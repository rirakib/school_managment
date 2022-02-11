@extends('master')
@section('admin_title','Teacher')
@section('admin_content')

<div class="">
    <div class="page-title">
        <div class="title_left">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="{{route('dashboard.index')}}" class="link">Dashboard</a></li>
                    <li class="item-link"><a href="{{route('teacher.index')}}" class="link">Teacher</a>
                    </li>
                    <li class="item-link"><a href="#" class="link">Create</a>
                    </li>
                </ul>
            </div>
        </div>


    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    @if(session('stutus'))
                    <h2 style="color:green">{{session('stutus')}}</h2>
                    @else
                    <h2>Create Teacher</h2>
                    @endif
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" action="{{route('teacher.store')}}" method="POST"
                        enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                        @csrf
                        <div class="row">
                            <p>Personal identity*</p>
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" >
                                    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="father_name">Father Name
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control @error('father_name') is-invalid @enderror" id="father_name" name="father_name"
                                        required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mother_name">Mother Name
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control @error('mother_name') is-invalid @enderror" id="mother_name" name="mother_name"
                                        required="required">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="national_id">National Id
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="national_id" name="national_id"
                                        required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="present_address">Present
                                    Address
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control @error('present_address') is-invalid @enderror" id="present_address" name="present_address"
                                        required="required">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="parmanenet_address">Parmanent Address
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control @error('parmanent_address') is-invalid @enderror" id="parmanenet_address"
                                        name="parmanent_address" required="required">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mobile_number">Mobile
                                    Number
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control @error('mobile_number') is-invalid @enderror" id="mobile_number" name="mobile_number"
                                        required="required">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="gender" class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                                <div class="col-md-7 col-sm-9 col-xs-12">
                                    <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                                        <option>Choose type</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="blood_group" class="control-label col-md-3 col-sm-3 col-xs-12">Blood group</label>
                                <div class="col-md-7 col-sm-9 col-xs-12">
                                    <select class="form-control" name="blood_group">
                                        <option>Choose type</option>
                                        <option value="a+">A+</option>
                                        <option value="b+">B+</option>
                                        <option value="ab+">AB+</option>
                                        <option value="o+">O+</option>
                                        <option value="a-">A-</option>
                                        <option value="b-">B-</option>
                                        <option value="ab-">AB-</option>
                                        <option value="o-">O-</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <p>Educational*</p>
                            <div class="form-group col-md-6">
                                <label for="ssc" class="control-label col-md-3 col-sm-3 col-xs-12">SSC</label>
                                <div class="col-md-7 col-sm-9 col-xs-12">
                                    <select class="form-control" name="ssc">
                                        <option>Choose type</option>
                                        <option value="science">Science</option>
                                        <option value="arts">Arts</option>
                                        <option value="commerce">commerce</option>
                                        <option value="others">others</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ssc_result">SSC Result
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="ssc_result" placeholder="GPA/CGPA"
                                        name="ssc_result">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="hsc" class="control-label col-md-3 col-sm-3 col-xs-12">HSC</label>
                                <div class="col-md-7 col-sm-9 col-xs-12">
                                    <select class="form-control" name="hsc">
                                        <option>Choose type</option>
                                        <option value="science">Science</option>
                                        <option value="arts">Arts</option>
                                        <option value="commerce">commerce</option>
                                        <option value="others">others</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hsc_result">HSC Result
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="hsc_result" placeholder="GPA/CGPA"
                                        name="hsc_result">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hounars_subject">Hounars
                                    Subject
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="hounars_subject" placeholder="Optional"
                                        name="hounars_subject">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hounars_result">Hounars
                                    Result
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="hounars_result" placeholder="GPA/CGPA"
                                        name="hounars_result">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="masters_subject">Masters
                                    Subject
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="masters_subject" placeholder="Optional"
                                        name="masters_subject">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="masters_result">Masters
                                    Result
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="masters_result" placeholder="GPA/CGPA"
                                        name="masters_result">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <p>File section*</p>
                            <div class="form-group col-md-6">
                                <label for="resume_image" class="control-label col-md-3 col-sm-3 col-xs-12">Resume File
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="resume_image" class="form-control col-md-7 col-xs-12" type="file" name="resume_image">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">Teacher Image
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="image" class="form-control col-md-7 col-xs-12 @error('image') is-invalid @enderror" type="file" name="image" required="required">
                                </div>
                            </div>
                            
                        </div>



                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


</div>


@endsection