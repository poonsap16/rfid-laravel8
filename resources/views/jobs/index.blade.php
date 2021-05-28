@extends('jobs.layout')
@section('title', 'Activity List')
@section('content')

<div class="container">
    <div class="row" mt-5>
        <div class="col-md-12">
            <h2>All Activity</h2>
            <a href="{{ route('jobs.create') }}" class="btn btn-success my-3">add new activity</a>
        </div>
    </div>

    @if( $message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message}}
        </div>
    @endif

    <table class="table table-border">
      	<tr>
			<th scope="col">รหัสกิจกรรม</th >
			<th scope="col">ชื่อกิจกรรม</th >
			<th scope="col">ชื่อย่อกิจกรรม</th >
			<th scope="col">Action</th >
      	</tr>
    
         @foreach ($data as $job)
      	<tr>
        	<td>{{$job->activity_id}}</td>
        	<td>{{$job->activity_name}}</td>
        	<td>{{$job->activity_acronym}}</td>
        	<td class="text-center">
                
                <form action="{{ route('jobs.destroy', $job->id) }}" method="post" style="display: inline-block">
                    <a href="{{ route('jobs.show', $job->id)}}" class="btn btn-primary btn-sm">Detail</a>
                    <a href="{{ route('jobs.edit', $job->id)}}" class="btn btn-secondary btn-sm">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                </form>
            </td>
      	</tr>
        @endforeach

    </table>
    {!! $data->links() !!}
</div>
@endsection