@extends('master')
@section('admin_title','Staf type')
@section('admin_content')


<div class="">
    <div class="page-title">
        <div class="title_left">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="{{route('dashboard.index')}}" class="link">Dashboard</a></li>
                    <li class="item-link"><a href="{{route('type.index')}}" class="link">Staf type</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>


    </div>
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                @if(session('delete'))
                <h2 style="color:red">{{session('delete')}}</h2>
                @else
                <h2>Staf Type List</h2>
                @endif
                <ul class="nav navbar-right panel_toolbox">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Create
                        Type</button>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">


                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
                                <th class="column-title">Name </th>
                                <th class="column-title">Edit </th>
                                <th class="column-title no-link last"><span class="nobr">Delete</span>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @if(count($stafType) == 0)
                            <tr class="odd pointer">
                                <td colspan="4" style="text-align:center">There have no data</td>
                            </tr>
                            @else

                            @foreach($stafType as $data)
                            <tr class="even pointer">
                                <td class=" ">{{$data->name}}</td>
                                <td class="a-right a-right"><a href="{{route('type.edit',$data->id)}}"
                                        class="btn btn-success">Edit</a></td>
                                <td class=" last">
                                    <form action="{{route('type.destroy',$data->id)}}" method="POST">
                                        @csrf
                                        @method('Delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            @endif
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                
                    <h2>Create Staf type</h2>
                  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="demo-form2" action="{{route('type.store')}}" method="POST" enctype="multipart/form-data"
                    data-parsley-validate class="form-horizontal form-label-left">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Staf Type Name <span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="name" name="name" required="required"
                                class="form-control col-md-7 col-xs-12 @error('name') is-invalid @enderror"
                                placeholder="Staf Type Name">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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

@endsection