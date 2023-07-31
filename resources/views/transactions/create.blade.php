@extends('../layout/navbar1')

@section('title','Transactions')


@section('content')



<div class="card card-primary">
    <div class="card-header" style="background-color: grey">
        <h3 class="card-title">Add New Transaction</h3>
    </div>

    <div class="row">
        <div class="col col-md-6 col-sm-12">
            <form action="{{ route('transaction.store') }}" method="POST">

                <div class="card-body">
                    <div class="form-group">
                       
                            <label for="c_id">Select Customer</label>
                            <select name="c_id" class="custom-select rounded-0" id="c_id">
                                <option value="-1" selected disabled>--Select Customer--</option>
                                @foreach($customers as $c)
                                <option value="{{ $c->id }}">{{ $c->id }} - {{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="date_time">Date & Time :</label>
                            <input type="datetime-local" name="date_time" class="form-control" id="date_time" required>
                        </div>

                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="text" name="amount" class="form-control" id="amount"
                                placeholder="Enter Amount">
                        </div>

                        <div class="form-group">
                            <label for="emp_id">Select Designation</label>
                            <select name="emp_id" class="custom-select rounded-0" id="emp_id">
                                <option value="-1" selected disabled>--Select Employee--</option>
                                @foreach($employees as $e)
                                <option value="{{ $e->id }}">{{ $e->id }}.{{ $e->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="used_amount">Used Amount</label>
                            <input type="text" name="used_amount" class="form-control" id="used_amount"
                                placeholder="Enter Used Amount">
                        </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success" style="float:right">Submit</button>
                        <a class="btn btn-warning" href="index" style="float:left">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
