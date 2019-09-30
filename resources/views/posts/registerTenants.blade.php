@extends('layouts.app')
@section('content')
<title>Tenant Registration</title>
<h1>Register Tenant</h1>

@if($errors->any())
@foreach($errors->all() as $error)
<div>
<ul>
<li>{{$error}}</li>
</ul>
</div>
@endforeach
@endif


@if($success = Session::get('SUCCESS'))
<h2>{{$success}}</h2>
@endif

@if($failed = Session::get('FAILED'))
<h2>{{$failed}}</h2>
@endif
<form action = "{{url('/addTenantsToDB')}}" method="post">
{{csrf_field()}}
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname">First Name</label>
      <input  name = "fname" type="text" class="form-control" id="fname" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
      <label for="lname">Last Name</label>
      <input name = "lname" type="text" class="form-control" id="lname" placeholder="Last Name">
    </div>
  </div>

  <div class="form-group">
    <label for="emailAddress">Email</label>
    <input name= "email" type="email" class="form-control" id="emailAddress" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="pow">Place Of Work</label>
    <input name = "placeofwork" type="text" class="form-control" id="pow" placeholder="bidco group...">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="idNumber">Id Number</label>
      <input name = "idnumber" type="text" class="form-control" id="idNumber"placeholder="1234556">
    </div>
    <div class="form-group col-md-4">
      <label for="Occ">Occupants</label>
      <input name = "occupants" type="text" class="form-control" id="Occ">
    </div>
    <div class="form-group col-md-2">
      <label for="gender">Gender</label>
    <select name = "gender">
    <option value = "MALE">Male</option>
    <option value = "FEMALE">Female</option>
    </select>
    </div>
  </div>
  <div class="form-group">
      <label for="building">Building</label>
      <input name = "buildingid" type="text" class="form-control" id="Buidling Id">
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
@endsection