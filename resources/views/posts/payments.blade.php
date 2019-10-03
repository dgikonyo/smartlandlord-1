@extends('layouts.app')
@section('content')
<form action = "{{url('/addPaymentsToDB')}}" method="post">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <legend>Monthly Payments</legend>
            </div>
            
            <div class="col-sm-5">
                <h4>Add payment:</h4>
                <div class="panel panel-default">
                    <div class="panel-body form-horizontal payment-form">
                        <div class="form-group">
                            <label for="concept" class="col-sm-3 control-label">Tenant ID</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="tenantid" name="tenantid">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-3 control-label">Deposit</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="deposit" name="deposit">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="amount" class="col-sm-3 control-label">House Number</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="houseNo" name="houseNumber">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-3 control-label">Rent</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="rentamount" name="rent">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="concept" class="col-sm-3 control-label">Invoice Number</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="invoiceNumber" name="invoiceNumber">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Payment Status</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="status" name="paymentstatus">
                                    <option>Paid</option>
                                    <option>Unpaid</option>
                                </select>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="description" class="col-sm-3 control-label">Damages</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="damageamount" name="damages">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date" class="col-sm-3 control-label">Payment Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="date" name="paydate">
                            </div>
                        </div>   
                        <div class="form-group">
                            <label for="description" class="col-sm-3 control-label">Penalty</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="penalty" name="penalty">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-sm-3 control-label">House Number</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="penalty" name="houseNumber">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="description" class="col-sm-3 control-label">Amount</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="payamount" name="amount">
                            </div>
                        </div>
                    </div>
                </div>            
            </div> 
            <div class="col-sm-7">
                <div class="row text-right">
                    <div class="col-xs-12">
                        <h4>Total: <strong><span class="preview-total"></span></strong></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <hr style="border:1px dashed #dddddd;">
                        <button type="submit" class="btn btn-primary btn-block">Submit all and finish</button>
                    </div>                
                </div>
            </div>
        </div>
    </div>
</form>
@endsection