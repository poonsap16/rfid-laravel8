@extends('layouts.layout')

@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>RFID</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="#"> Create New Student</a>
            </div>
        </div>
</div>
   

<table class="table table-bordered table-responsive-lg">
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
    @foreach ($students as $student)
            <tr>
            <td>{{$student->branch}}</td>
            <td>{{$student->prefix}}</td>
            <td>{{$student->thai_name}}</td>
            <td>{{$student->institute_resident}}</td>
            <td>{{$student->eng_name}}</td>
            <td>{{$student->sap}}</td>
            <td>{{$student->doctor_cert}}</td>
            <td>{{$student->id_cart}}</td>
            <td>{{$student->member}}</td>
            <td>{{$student->telaphone}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->year}}</td>
            <td>{{$student->year_study}}</td>
            <td>{{$student->remark}}</td>
            </tr>
    @endforeach
        
    </tbody>
        
</table>

@endsection