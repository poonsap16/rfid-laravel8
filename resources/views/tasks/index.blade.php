<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
	</head>
<body>
	<div class="container mt-2">
		<div class="row">
			<div class="col-lg-12 margin-tb">
				<div class="pull-left">
					<h2>Task</h2>
				</div>
				<div class="pull-right mb-2">
					<a class="btn btn-success" href="{{ route('tasks.create') }}"> Create Task</a>
				</div>
			</div>
		</div>

	@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p>{{ $message }}</p>
	</div>
	@endif
	<table class="table table-bordered">
	<tr>

	        <th>activity_id</th>
	        <th>activity_name</th>
	        <th>activity_acronym</th>
	        <th>bigin_time</th>
	        <th>end_time</th>
	        <th>bigin_time_before</th>
	        <th>end_time_late</th>
	        <th>job_id</th>
	        <th>job_type</th>
	        <th>person_type</th>
	        <th>work_hour</th>

			<th width="280px">Action</th>
	</tr>
	@foreach ($tasks as $task)
		<tr>
		    <td>{{ $task->activity_id }}</td>
		    <td>{{ $task->activity_name }}</td>
		    <td>{{ $task->activity_acronym }}</td>
		    <td>{{ $task->bigin_time }}</td>
		    <td>{{ $task->end_time }}</td>
		    <td>{{ $task->bigin_time_before }}</td>
		    <td>{{ $task->end_time_late }}</td>
		    <td>{{ $task->job_id }}</td>
		    <td>{{ $task->job_type }}</td>
		    <td>{{ $task->person_type }}</td>
		    <td>{{ $task->work_hour }}</td>
			<td>
				<form action="{{ route('tasks.destroy',$task->id) }}" method="Post">
					<a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
	@endforeach
	</table>
	{!! $tasks->links() !!}
</body>
</html>