@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
</style>

<div class="push-top">
    <table class="table">
    <thead>
        <tr class="table-warning">
            <td>branch</td>
            <td>prefix</td>
            <td>thai_name</td>
            <td>institute_resident</td>
            <td>eng_name</td>
            <td>sap</td>
            <td>doctor_cert</td>
            <td>id_cart</td>
            <td>member</td>
            <td>telaphone</td>
            <td>email</td>
            <td>year</td>
            <td>year_study</td>
            <td>remark</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{$students->branch}}</td>
            <td>{{$students->prefix}}</td>
            <td>{{$students->thai_name}}</td>
            <td>{{$students->institute_resident}}</td>
            <td>{{$students->eng_name}}</td>
            <td>{{$students->sap}}</td>
            <td>{{$students->doctor_cert}}</td>
            <td>{{$students->id_cart}}</td>
            <td>{{$students->member}}</td>
            <td>{{$students->telaphone}}</td>
            <td>{{$students->email}}</td>
            <td>{{$students->year}}</td>
            <td>{{$students->year_study}}</td>
            <td>{{$students->remark}}</td>
            <td class="text-center">
                <a href="{{ route('students.edit', $students->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                <form action="{{ route('students.destroy', $students->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection