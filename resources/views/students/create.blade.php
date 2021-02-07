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
    Add User
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
      <form method="post" action="{{ route('students.store') }}">
          <div class="form-group">
              @csrf
              <label for="branch">branch</label>
              <input type="text" class="form-control" branch="name"/>
          </div>
          <div class="form-group">
              <label for="prefix">prefix</label>
              <input type="prefix" class="form-control" name="prefix"/>
          </div>
          <div class="form-group">
              <label for="thai_name">thai_name</label>
              <input type="text" class="form-control" name="thai_name"/>
          </div>
          <div class="form-group">
              <label for="institute_resident">institute_resident</label>
              <input type="text" class="form-control" name="institute_resident"/>
          </div>
          <div class="form-group">
              <label for="eng_name">eng_name</label>
              <input type="text" class="form-control" name="eng_name"/>
          </div>
          <div class="form-group">
              <label for="sap">sap</label>
              <input type="text" class="form-control" name="sap"/>
          </div>
          <div class="form-group">
              <label for="doctor_cert">doctor_cert</label>
              <input type="text" class="form-control" name="doctor_cert"/>
          </div>
          <div class="form-group">
              <label for="id_cart">id_card</label>
              <input type="text" class="form-control" name="id_cart"/>
          </div>
          <div class="form-group">
              <label for="member">member</label>
              <input type="text" class="form-control" name="member"/>
          </div>
          <div class="form-group">
              <label for="telephone">telephone</label>
              <input type="text" class="form-control" name="telephone"/>
          </div>
          <div class="form-group">
              <label for="email">email</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="year">year</label>
              <input type="text" class="form-control" name="year"/>
          </div>
          <div class="form-group">
              <label for="year_study">year_study</label>
              <input type="text" class="form-control" name="year_study"/>
          </div>
          <div class="form-group">
              <label for="remark">remark</label>
              <input type="text" class="form-control" name="remark"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Create Student</button>
      </form>
  </div>
</div>
@endsection