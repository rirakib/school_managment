@extends('master')
@section('admin_title','Class')
@section('admin_content')

<div class="">
    <div class="page-title">
        <div class="title_left">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="{{route('dashboard.index')}}" class="link">Dashboard</a></li>
                    <li class="item-link"><a href="{{route('subject.index')}}" class="link">Subject</a>
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
                    <h2>Create Class</h2>
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
                    <form id="demo-form2" action="{{route('subject.store')}}" method="post"
                        data-parsley-validate class="form-horizontal form-label-left">
                        @csrf 
                        <div class="row">
                            <div class="form-group col-md-11 mx-auto">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Class</label>
                                <div class="col-md-7 col-sm-9 col-xs-12">
                                    <select class="form-control" id="cat_id" name="class_id">
                                        <option>Choose Class</option>
                                        @foreach(DB::table('stu_classes')->orderBy('name','asc')->get() as $data)
                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
    
                            <div class="form-group col-md-11 mx-auto">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="total_subject">Subject <span
                                        >*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="subject" name="subject" 
                                        class="form-control col-md-7 col-xs-12 @error('subject') is-invalid @enderror"
                                        placeholder="Subject">
                                    @error('subject')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                       
                        
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button class="btn btn-primary" id="input" data-role="tagsinput" type="reset">Reset</button>
                                <button  class="btn btn-success">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


</div>


@endsection