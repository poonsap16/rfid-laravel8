@extends('jobs.layout')
@section('title', 'Activity Edit')
@section('content')

<div class="container">
    <div class="row" mt-5>
        <div class="col-md-12">
            <h2>Edit activity</h2>
            <a href="{{ route('jobs.index') }}" class="btn btn-primary my-3">back</a>
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

<form action="{{ route('jobs.update', $job->id) }}" method="post">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label for="activity_id">รหัสกิจกรรม</label>
            <input type="text" class="form-control" id="activity_id" name="activity_id" value="{{ $job->activity_id}}">
        </div>
        <div class="form-group">
            <label for="activity_name">ชื่อกิจกรรม</label>
            <input type="text" class="form-control" id="activity_name" name="activity_name" value="{{ $job->activity_name}}">
        </div>
        <div class="form-group">
            <label for="activity_acronym">ชื่อย่อกิจกรรม</label>
            <input type="text" class="form-control" id="activity_acronym" name="activity_acronym" value="{{ $job->activity_acronym}}">
        </div>
        <div class="form-group">
            <label for="begin_time">เวลาเริ่ม</label>
            <input type="text" class="form-control" id="begin_time" name="begin_time" value="{{ $job->begin_time}}">
        </div>
        <div class="form-group">
            <label for="end_time">เวลาสิ้นสุด</label>
            <input type="text" class="form-control" id="end_time" name="end_time" value="{{ $job->end_time}}">
        </div>
        <div class="form-group">
            <label for="begin_time_before">เวลาเริ่มก่อน</label>
            <input type="text" class="form-control" id="begin_time_before" name="begin_time_before" value="{{ $job->begin_time_before}}">
        </div>
        <div class="form-group">
            <label for="end_time_late">เวลาหลังสิ้นสุด</label>
            <input type="text" class="form-control" id="end_time_late" name="end_time_late" value="{{ $job->end_time_late}}">
        </div>
        <div class="form-group">
            <label for="job_id">รหัสภาระงาน</label>
            <input type="text" class="form-control" id="job_id" name="job_id" value="{{ $job->job_id}}">
        </div>
        <div class="form-group">
            <label for="job_type">ชื่อภาระงาน</label>
            <input type="text" class="form-control" id="job_type" name="job_type" value="{{ $job->job_type}}">
        </div>	
        <div class="form-group">
            <label for="person_type">สถานะ</label>
            <input type="text" class="form-control" id="person_type" name="person_type" value="{{ $job->person_type}}">
        </div>
        <div class="form-group">
            <label for="work_hour">จำนวนชั่วโมง</label>
            <input type="text" class="form-control" id="work_hour" name="work_hour" value="{{ $job->work_hour}}">
        </div>
        <button type="submit" class="btn btn-block btn-success my-3">Update</button>
    </form>


@endsection