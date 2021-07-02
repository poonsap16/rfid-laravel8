@extends('jobs.layout')
@section('title', 'Activity Add')
@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <h2>เพิ่มรายการกิจกรรม</h2>
        </div>
    </div>
</div>
    
@if( $errors->any())
    <div class="alert alert-danger">
        <strong>Whoop</strong>
        There were some problems with your input. <br><br>
        <ul>
            @foreach( $errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul> 
    </div>
@endif

<form action="{{ route('jobs.store') }}" method="post">
    @csrf
    <div class="row mt-3">
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="input-group mb-2">
                <span class="input-group-text">รหัสกิจกรรม</span>
                <input type="text" class="form-control" id="activity_id" name="activity_id">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="input-group mb-2">
                <span class="input-group-text">ชื่อกิจกรรม</span>
                <input type="text" class="form-control" id="activity_name" name="activity_name">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="input-group mb-2">
                <span class="input-group-text">ชื่อย่อกิจกรรม</span>
                <input type="text" class="form-control" id="activity_acronym" name="activity_acronym">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="input-group mb-2">
                <span class="input-group-text">เวลาเริ่ม</span>
                <input type="text" class="form-control" id="begin_time" name="begin_time">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="input-group mb-2">
                <span class="input-group-text">เวลาสิ้นสุด</span>
                <input type="text" class="form-control" id="end_time" name="end_time">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="input-group mb-2">
                <span class="input-group-text">เวลาเริ่มก่อน</span>
                <input type="text" class="form-control" id="begin_time_before" name="begin_time_before">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="input-group mb-2">
                <span class="input-group-text">เวลาหลังสิ้นสุด</span>
                <input type="text" class="form-control" id="end_time_late" name="end_time_late">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="input-group mb-2">
                <span class="input-group-text">รหัสภาระงาน</span>
                <input type="text" class="form-control" id="job_id" name="job_id">
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="input-group mb-2">
                <span class="input-group-text">ชื่อภาระงาน</span>
                <input type="text" class="form-control" id="job_type" name="job_type">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="input-group mb-2">
                <span class="input-group-text">สถานะ</span>
                <input type="text" class="form-control" id="person_type" name="person_type">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="input-group mb-2">
                <span class="input-group-text">จำนวนชั่วโมง</span>
                <input type="text" class="form-control" id="work_hour" name="work_hour">
            </div>
        </div>

        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('jobs.index') }}" class="btn btn-primary my-3">back</a>
                <button type="submit" class="btn btn-block btn-success my-3">Save</button>
            </div>
        </div>
    </div>
    </form>


@endsection