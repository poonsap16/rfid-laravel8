@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Edit & Update
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('students.update', $student->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="branch">branch</label>
              <input type="text" class="form-control" name="branch" value="{{ $student->branch }}"/>
          </div>
          <div class="form-group">
              <label for="prefix">prefix</label>
              <input type="text" class="form-control" name="prefix" value="{{ $student->prefix }}"/>
          </div>
          <div class="form-group">
              <label for="thai_name">thai_name</label>
              <input type="text" class="form-control" name="thai_name" value="{{ $student->thai_name }}"/>
          </div>
          <div class="form-group">
              <label for="institute_resident">institute_resident</label>
              <input type="text" class="form-control" name="institute_resident" value="{{ $student->institute_resident }}"/>
          </div>
          <div class="form-group">
              <label for="eng_name">eng_name</label>
              <input type="text" class="form-control" name="eng_name" value="{{ $student->eng_name }}"/>
          </div>
          <div class="form-group">
              <label for="sap">sap</label>
              <input type="text" class="form-control" name="sap" value="{{ $student->sap }}"/>
          </div>
          <div class="form-group">
              <label for="doctor_cert">doctor_cert</label>
              <input type="text" class="form-control" name="doctor_cert" value="{{ $student->doctor_cert }}"/>
          </div>
          <div class="form-group">
              <label for="id_card">id_cart</label>
              <input type="text" class="form-control" name="id_card" value="{{ $student->id_cart }}"/>
          </div>
          <div class="form-group">
              <label for="member">member</label>
              <input type="text" class="form-control" name="member" value="{{ $student->member }}"/>
          </div>
          <div class="form-group">
              <label for="telaphone">telaphone</label>
              <input type="text" class="form-control" name="telaphone" value="{{ $student->telaphone }}"/>
          </div>
          <div class="form-group">
              <label for="email">email</label>
              <input type="text" class="form-control" name="email" value="{{ $student->email }}"/>
          </div>
          <div class="form-group">
              <label for="year">year</label>
              <input type="text" class="form-control" name="year" value="{{ $student->year }}"/>
          </div>
          <div class="form-group">
              <label for="year_study">year-study</label>
              <input type="text" class="form-control" name="year_study" value="{{ $student->year_study }}"/>
          </div>
          <div class="form-group">
              <label for="remark">remark</label>
              <input type="text" class="form-control" name="remark" value="{{ $student->remark }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update User</button>
      </form>
  </div>
</div>
@endsection