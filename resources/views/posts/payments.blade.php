@extends('layouts.app')
@section('content')
<form>
  <div class="form-group row">
    <label for="payments"class="col-md-4 col-form-label text-md-right">Payments</label>
    <div class="col-md-6">
        <input type="text" class="form-control" id="payment" placeholder="Enter invoice Number">
    </div>
  </div>

  <div class="form-group row">
    <label for="house-entry"class="col-md-4 col-form-label text-md-right">House Number</label>
    <div class="col-md-6">
        <input type="text" class="form-control" id="House-entry" placeholder="House Number">
    </div>
  </div>

  <div class="form-group row mb-0"> 
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">Submit Payment</button>
    </div>
  </div>

</form>
@endsection