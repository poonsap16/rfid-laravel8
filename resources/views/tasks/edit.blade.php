<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tasks.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('tasks.update',$task->activity_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="activity_id">รหัสกิจกรรม</label>
            <input type="text" class="form-control" id="activity_id" name="activity_id" value="{{ $task->activity_id }}">
        </div>
        <div class="form-group">
            <label for="activity_name">ชื่อกิจกรรม</label>
            <input type="text" class="form-control" id="activity_name" name="activity_name" value="{{ $task->activity_name }}">
        </div>
        <div class="form-group">
            <label for="activity_acronym">ชื่อย่อกิจกรรม</label>
            <input type="text" class="form-control" id="activity_acronym" name="activity_acronym" value="{{ $task->activity_acronym }}">
        </div>
        <div class="form-group">
            <label for="begin_time">เวลาเริ่ม</label>
            <input type="text" class="form-control" id="begin" name="begin" value="{{ $task->begin }}">
        </div>
        <div class="form-group">
            <label for="end_time">เวลาสิ้นสุด</label>
            <input type="text" class="form-control" id="end_time" name="end_time" value="{{ $task->end_time }}">
        </div>
        <div class="form-group">
            <label for="begin_time_before">เวลาเริ่มก่อน</label>
            <input type="text" class="form-control" id="begin_time_before" name="begin_time_before" value="{{ $task->begin_time_before }}">
        </div>
        <div class="form-group">
            <label for="end_time_late">เวลาหลังสิ้นสุด</label>
            <input type="text" class="form-control" id="end_time_late" name="end_time_late" value="{{ $task->end_time_late }}">
        </div>
        <div class="form-group">
            <label for="job_id">รหัสภาระงาน</label>
            <input type="text" class="form-control" id="job_id" name="job_id" value="{{ $task->job_id }}">
        </div>
        <div class="form-group">
            <label for="job_type">ชื่อภาระงาน</label>
            <input type="text" class="form-control" id="job_type" name="job_type" value="{{ $task->job_type }}">
        </div>	
        <div class="form-group">
            <label for="person_type">สถานะ</label>
            <input type="text" class="form-control" id="person_type" name="person_type" value="{{ $task->person_type }}">
        </div>
        <div class="form-group">
            <label for="work_hour">จำนวนชั่วโมง</label>
            <input type="text" class="form-control" id="work_hour" name="work_hour" value="{{ $task->work_hour }}">
        </div>
        
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection