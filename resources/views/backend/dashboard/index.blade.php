@extends('master')
@section('admin_title','Dashboard')
@section('admin_content')

<div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Students</span>
        <div class="count">{{$total_students}}</div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fas fa-chalkboard-teacher"></i> Total Teacher</span>
        <div class="count">{{$total_teachers}}</div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fas fa-male"></i> Total Males</span>
        <div class="count green">{{$total_male}}</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>{{$male_parcent}}% </i>in all students</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fas fa-female"></i> Total Females</span>
        <div class="count">{{$total_female}}</div>
        <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>{{$female_parcent}}% </i> in all students</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
        <div class="count">2,315</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
        <div class="count">7,325</div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
    </div>
</div>



@endsection