@extends('jobs.layout')
@section('title', 'Activity Detail')
@section('content')

<div class="container">
    <div class="row" mt-5>
        <div class="col-md-12">
            <h2>Activity Detail</h2>
            <a href="{{ route('jobs.index') }}" class="btn btn-primary my-3">back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>รหัสกิจกรรม:</strong>
                {{ $job->activity_id }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ชื่อกิจกรรม:</strong>
                {{ $job->activity_name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ชื่อย่อกิจกรรม:</strong>
                {{ $job->activity_acronym }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>เวลาเริ่ม:</strong>
                {{ $job->begin_time }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>เวลาสิ้นสุด:</strong>
                {{ $job->end_time }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>เวลาเริ่มก่อน:</strong>
                {{ $job->begin_time_before }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>เวลาหลังสิ้นสุด:</strong>
                {{ $job->end_time_late }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>รหัสภาระงาน:</strong>
                {{ $job->job_id }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ชื่อภาระงาน:</strong>
                {{ $job->job_type }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>สถานะ:</strong>
                {{ $job->person_type }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>จำนวนชั่วโมง:</strong>
                {{ $job->work_hour }}
        </div>
    </div>

</div>
@endsection