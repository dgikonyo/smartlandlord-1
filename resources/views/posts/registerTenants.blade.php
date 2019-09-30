@extends('layouts.app')
@section('content')
<title>Tenant Registration</title>
<h1>Register Tenant</h1>
<form action="{{url('TenantsController)}}"method="post">
@csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname">First Name</label>
      <input type="text" class="form-control" id="fname" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
      <label for="lname">Last Name</label>
      <input type="password" class="form-control" id="lname" placeholder="Password">
    </div>
  </div>

  <div class="form-group">
    <label for="emailAddress">Email</label>
    <input type="email" class="form-control" id="emailAddress" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="pow">Place Of Work</label>
    <input type="text" class="form-control" id="pow" placeholder="bidco group...">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="idNumber">Id Number</label>
      <input type="text" class="form-control" id="idNumber"placeholder="1234556">
    </div>
    <div class="form-group col-md-4">
      <label for="Occ">Occupants</label>
      <input type="text" class="form-control" id="Occ">
    </div>
    <div class="form-group col-md-2">
      <label for="gender">Gender</label>
      <input type="text" class="form-control" id="gender">
    </div>
  </div>
  <div class="form-group">
      <label for="building">Building</label>
      <input type="text" class="form-control" id="Buidling Id">
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
@endsection