@extends('layouts.layout')
	<div class="container mt-2">
		<div class="row">
			<div class="col-lg-12 margin-tb">
				<div class="pull-left">
					<h2>Task</h2>
				</div>
				<div class="pull-right mb-2">
					<a class="btn btn-success" href="{{ route('timesheets.create') }}"> Create Task</a>
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
            <th>num<th>
            <th>card_num<th>
            <th>sap_id<th>
            <th>full_name<th>
            <th>date_stamp<th>
            <th>time_stamp<th>
            <th>rfid_position<th>
            <th>rfid_status<th>
            <th>rfid_door<th>
			<th width="280px">Action</th>
	</tr>
	@foreach ($timesheets as $timesheet)
		<tr>
            <td>{{$timesheet->num}}<td>
            <td>{{$timesheet->card_num}}<td>
            <td>{{$timesheet->sap_id}}<td>
            <td>{{$timesheet->full_name}}<td>
            <td>{{$timesheet->date_stamp}}<td>
            <td>{{$timesheet->time_stamp}}<td>
            <td>{{$timesheet->rfid_position}}<td>
            <td>{{$timesheet->rfid_status}}<td>
            <td>{{$timesheet->rfid_door}}<td>
			<td>
				<form action="{{ route('timesheets.destroy',$timesheet->id) }}" method="Post">
					<a class="btn btn-primary" href="{{ route('timesheets.edit',$timesheet->id) }}">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
	@endforeach
	</table>
	{!! $timesheets->links() !!}
