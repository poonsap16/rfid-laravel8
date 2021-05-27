@extends('layouts.layout')

@section('title', 'Activity List')

@section('content')

<div class="container mt-3">
	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>รายการกิจกรรมวิชาการ</h2>
				<hr>
			</div>
			<div class="pull-right mb-2">
				<a class="btn btn-success" href="{{ route('tasks.create') }}">เพิ่มกิจกรรมใหม่</a>
			</div>
		</div>
		


@if($message = Session::get('success'))
	<div class="alert alert-success">
		<p>{{ $message }}</p>
	</div>
@endif

<div class="table-responsive">
  <table class="table">
  <thead class="table-dark">
      	<tr>
			<th scope="col">รหัสกิจกรรม</th >
			<th scope="col">ชื่อกิจกรรม</th >
			<th scope="col">ชื่อย่อกิจกรรม</th >
			<th scope="col">Action</th >
      	</tr>
    </thead>
	<tbody>
	@foreach ($tasks as $task)
      	<tr>
        	<td>{{$task->activity_id}}</td>
        	<td>{{$task->activity_name}}</td>
        	<td>{{$task->activity_acronym}}</td>
        	<td class="text-center">
                <a href="{{ route('tasks.edit', $task->activity_id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('tasks.destroy', $task->activity_id) }}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                </form>
            </td>
      	</tr>
	 @endforeach
    </tbody>
  </table>
  {!! $tasks->links() !!}
</div>
</div>
@endsection