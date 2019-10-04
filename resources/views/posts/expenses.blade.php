@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
        <div class="col-sm-12">
            <legend>Monthly Payments</legend>
        </div>
        <!-- panel preview -->
        <form method="{{url('/addExpensesToDB')}}"method="post">
        {{csrf_field()}}
        <div class="col-sm-5">
            <h4>Add payment:</h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Land Taxes</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="landTaxes" name="landTaxes">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Maintenance</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="maintenance" name="maintenance">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="amount" class="col-sm-3 control-label">Salaries</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="salaries" name="salaries">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Expense Entry Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="entryDate" name="entryDate">
                        </div>
                    </div>   
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Building Id</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="buildingId" name="buildingId">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Amount</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="expenseamount" name="expenseamount">
                        </div>
                    </div>
                </div>
            </div>            
        </div> <!-- / panel preview -->
        </form>
        <div class="col-sm-7">
            <div class="row text-right">
                <div class="col-xs-12">
                    <h4>Total Monthly Expense: <strong><span class="preview-total"></span></strong></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <hr style="border:1px dashed #dddddd;">
                    <button type="submit" class="btn btn-primary btn-block">Submit Expenses</button>
                </div>                
            </div>
        </div>
	</div>
</div>
@endsection