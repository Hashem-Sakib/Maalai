@extends('../layout/navbar1')

@section('title','Employee Approvals')


@section('content')


<!-- form start -->
<div class="card card-primary">
    <div class="card-header" style="background-color: grey">
        <h3 class="card-title">Add New Approval Status</h3>
    </div>
    <div class="row">
        <div class="col col-md-6 col-sm-12">
            <form action="{{route('approval.store')}}" method="POST">
                <div class="card-body">
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
                            placeholder="Enter Approval">
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
