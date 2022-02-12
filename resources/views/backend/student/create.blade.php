@extends('master')
@section('admin_title','Student')
@section('admin_content')

<div class="">
    <div class="page-title">
        <div class="title_left">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="{{route('dashboard.index')}}" class="link">Dashboard</a></li>
                    <li class="item-link"><a href="{{route('student.index')}}" class="link">Student</a>
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
                    <h2>Create Student</h2>
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
                    <form id="demo-form2" action="{{route('student.store')}}" method="POST"
                        enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                        @csrf
                        <div class="row">
                            <p>Personal identity*</p>
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="unique_id">Unique ID
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control @error('unique_id') is-invalid @enderror"
                                        id="unique_id" name="unique_id" placeholder="ABC-111-111" value="{{ old('unique_id') }}">
                                    @error('unique_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ old('name') }}">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="father_name">Father Name
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control @error('father_name') is-invalid @enderror"
                                        id="father_name" name="father_name" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mother_name">Mother Name
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control @error('mother_name') is-invalid @enderror"
                                        id="mother_name" name="mother_name" required="required">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="national_id">Birth
                                    Certificate No:
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="birth_certificate_number"
                                        name="birth_certificate_number" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="present_address">Present
                                    Address
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text"
                                        class="form-control @error('present_address') is-invalid @enderror"
                                        id="present_address" name="present_address" required="required">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="parmanenet_address">Parmanent Address
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text"
                                        class="form-control @error('parmanent_address') is-invalid @enderror"
                                        id="parmanenet_address" name="parmanent_address" required="required">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="family_income">
                                    Family Income
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text"
                                        class="form-control @error('family_income') is-invalid @enderror"
                                        id="family_income" name="family_income" required="required">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="total_family_member">Total Family Member
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text"
                                        class="form-control @error('total_family_member') is-invalid @enderror"
                                        id="total_family_member" name="total_family_member" required="required">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mobile_number">Mobile
                                    Number
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control @error('mobile_number') is-invalid @enderror"
                                        id="mobile_number" name="mobile_number" required="required">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="father_id">Father Id Card
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="file" class="form-control" id="father_id" name="father_id"
                                        required="required">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date_of_birth">
                                    Date of Birth
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="date" class="form-control @error('mobile_number') is-invalid @enderror"
                                        id="date_of_birth" name="date_of_birth" required="required">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mother_id">Mother Id Card
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="file" class="form-control" id="mother_id" name="mother_id"
                                        required="required">
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
                                <label for="blood_group" class="control-label col-md-3 col-sm-3 col-xs-12">Blood
                                    group</label>
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
                            <div class="form-group col-md-6">
                                <label for="admission_class" class="control-label col-md-3 col-sm-3 col-xs-12">Admission
                                    On</label>
                                <div class="col-md-7 col-sm-9 col-xs-12">
                                    <select class="form-control @error('admission_class') is-invalid @enderror"
                                        name="admission_class">
                                        <option>Choose type</option>
                                        @foreach(DB::table('stu_classes')->orderBy('name','desc')->get() as $class)
                                        <option value="{{$class->id}}">{{$class->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="blood_group" class="control-label col-md-3 col-sm-3 col-xs-12">Group</label>
                                <div class="col-md-7 col-sm-9 col-xs-12">
                                    <select class="form-control" name="group">
                                        <option>Choose type</option>
                                        @foreach(DB::table('groups')->orderBy('name','asc')->get() as $group)
                                        <option value="{{$group->id}}">{{$group->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="student_types" class="control-label col-md-3 col-sm-3 col-xs-12">Student
                                    Type</label>
                                <div class="col-md-7 col-sm-9 col-xs-12">
                                    <select class="form-control @error('student_types') is-invalid @enderror"
                                        name="student_types">
                                        <option>Choose type</option>
                                        @foreach(DB::table('student_types')->orderBy('name','desc')->get() as $student)
                                        <option value="{{$student->id}}">{{$student->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="shift" class="control-label col-md-3 col-sm-3 col-xs-12">Shift</label>
                                <div class="col-md-7 col-sm-9 col-xs-12">
                                    <select class="form-control" name="shift">
                                        <option>Choose type</option>
                                        @foreach(DB::table('shifts')->orderBy('name','asc')->get() as $shift)
                                        <option value="{{$shift->id}}">{{$shift->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="present_address">PSC
                                    Result
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text"
                                        class="form-control @error('psc_result') is-invalid @enderror"
                                        id="psc_result" name="psc_result" >
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="jsc_result">JSC Result
                                </label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text"
                                        class="form-control @error('jsc_result') is-invalid @enderror"
                                        id="jsc_result" name="jsc_result">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <p>File section*</p>
                            <div class="form-group col-md-6">
                                <label for="birth_image" class="control-label col-md-3 col-sm-3 col-xs-12">Birth
                                    Certificate
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="birth_image" class="form-control col-md-7 col-xs-12" type="file"
                                        name="birth_image">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="image" class="control-label col-md-3 col-sm-3 col-xs-12">Student Image
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="image"
                                        class="form-control col-md-7 col-xs-12 @error('image') is-invalid @enderror"
                                        type="file" name="image" required="required">
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