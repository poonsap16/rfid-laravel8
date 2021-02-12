<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel 8 CRUD Tutorial From Scratch</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Laravel 8 CRUD Example Tutorial</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('activities.create') }}"> Create Company</a>
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
<th>S.No</th>
<th>activity_id</th>
<th>activity_name</th>
<th>activity_acronym</th>
<th width="280px">Action</th>


</tr>
@foreach ($activity_tasks as $activity_task)
<tr>
<td>{{ $activity_task->activity_id }}</td>
<td>{{ $activity_task->activity_name }}</td>
<td>{{ $activity_task->activity_acronym }}</td>
<td>
<form action="{{ route('activities.destroy',$activity_task->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('activities.edit',$activity_task->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $activity_tasks->links() !!}
</body>
</html>