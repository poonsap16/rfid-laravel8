@extends('jobs.layout')
@section('title', 'Activity Detail')
@section('content')



<div class="container mt-5" style="width: 30rem;">
    <div class="card text-dark bg-light mb-3">
        <div class="card-header"><h2>Activity Detail</h2></div>
        <div class="card-body">
        <div class="row row gx-5">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card-text">
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
                        {{\Carbon\Carbon::createFromFormat('H:i:s',$job->begin_time)->format('h:i')}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>เวลาสิ้นสุด:</strong>
                        {{\Carbon\Carbon::createFromFormat('H:i:s',$job->end_time)->format('h:i')}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>เวลาเริ่มก่อน:</strong>
                        {{\Carbon\Carbon::createFromFormat('H:i:s',$job->end_time)->format('h:i')}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>เวลาหลังสิ้นสุด:</strong>
                        {{\Carbon\Carbon::createFromFormat('H:i:s',$job->end_time_late)->format('h:i')}}
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
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('jobs.index') }}" class="btn btn-primary btn-sm" type="backup">Back</a>
    </div>
</div>
@endsection