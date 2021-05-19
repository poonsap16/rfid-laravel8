@extends('layouts.layout')

@section('title', 'Activity Create')

@section('content')
    <h2>Add New Activity</h2>
    <hr>

    <form action="{{ route('tasks.store') }}" method="post">
    @csrf
    <div class="form-group">
            <label for="activity_id">รหัสกิจกรรม</label>
            <input type="text" class="form-control" id="activity_id" name="activity_id">
        </div>
        <div class="form-group">
            <label for="activity_name">ชื่อกิจกรรม</label>
            <input type="text" class="form-control" id="activity_name" name="activity_name">
        </div>
        <div class="form-group">
            <label for="activity_acronym">ชื่อย่อกิจกรรม</label>
            <input type="text" class="form-control" id="activity_acronym" name="activity_acronym">
        </div>
        <div class="form-group">
            <label for="begin_time">เวลาเริ่ม</label>
            <input type="text" class="form-control" id="begin" name="begin">
        </div>
        <div class="form-group">
            <label for="end_time">เวลาสิ้นสุด</label>
            <input type="text" class="form-control" id="end_time" name="end_time">
        </div>
        <div class="form-group">
            <label for="begin_time_before">เวลาเริ่มก่อน</label>
            <input type="text" class="form-control" id="begin_time_before" name="begin_time_before">
        </div>
        <div class="form-group">
            <label for="end_time_late">เวลาหลังสิ้นสุด</label>
            <input type="text" class="form-control" id="end_time_late" name="end_time_late">
        </div>
        <div class="form-group">
            <label for="job_id">รหัสภาระงาน</label>
            <input type="text" class="form-control" id="job_id" name="job_id">
        </div>
        <div class="form-group">
            <label for="job_type">ชื่อภาระงาน</label>
            <input type="text" class="form-control" id="job_type" name="job_type">
        </div>	
        <div class="form-group">
            <label for="person_type">สถานะ</label>
            <input type="text" class="form-control" id="person_type" name="person_type">
        </div>
        <div class="form-group">
            <label for="work_hour">จำนวนชั่วโมง</label>
            <input type="text" class="form-control" id="work_hour" name="work_hour">
        </div>
        <button type="submit" class="btn btn-block btn-success">Create Task</button>
    </form>

    @if($errors->any())
            <div class="alert alert danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
    @endif
@endsection