@extends('../layout/navbar1')

@section('title','Create Invoices')


@section('content')


<!-- form start -->
<div class="card card-primary">
    <div class="card-header" style="background-color: grey">
        <h3 class="card-title">Add New Invoice</h3>
    </div>
    <div class="row">
        <div class="col col-md-6 col-sm-12">
            <form action="{{route('invoice.store')}}" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="c_id">Customer</label>
                        <select name="c_id" class="custom-select rounded-0" id="c_id">
                            <option value="-1" selected disabled>--Select One--</option>
                            @foreach ($customers as $c)
                            <option value="{{$c->id}}">{{$c->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="date_time">Date & Time :</label>
                        <input type="datetime-local" name="date_time" class="form-control"  id="date_time" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="total_amount">Total Amount</label>
                        <input type="text" name="total_amount" class="form-control" id="total_amount"
                            placeholder="Enter Approval">
                    </div>
                    <div class="form-group">
                        <label for="paid">Paid</label>
                        <input type="text" name="paid" class="form-control" id="paid"
                            placeholder="Enter Paid Amount">
                    </div>
                    <div class="form-group">
                        <label for="emp_id">Employee</label>
                        <select name="emp_id" class="custom-select rounded-0" id="emp_id">
                            <option value="-1" selected disabled>--Select One--</option>
                            @foreach ($employees as $e)
                            <option value="{{$e->id}}">{{$e->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="approval">Approval</label>
                        <input type="text" name="approval" class="form-control" id="approval"
                            placeholder="Enter Approval Status">
                    </div>
                    <div class="form-group">
                        <label for="approved_by">Approved By</label>
                        <select name="approved_by" class="custom-select rounded-0" id="approved_by">
                            <option value="-1" selected disabled>--Select One--</option>
                            @foreach ($employees as $e)
                            <option value="{{$e->id}}">{{$e->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">

                    <button type="submit" class="btn btn-success" style="float:right">Submit</button>
                    <a class="btn btn-warning" href="index" style="float:left">Back</a>
                </div>


            </form>
        </div>
    </div>
</div>


@endsection
