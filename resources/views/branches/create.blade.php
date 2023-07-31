@extends('../layout/navbar1')

@section('title','Branches')


@section('content')

<div class="card card-primary">
    <div class="card-header" style="background-color: grey">
        <h3 class="card-title">Add New Branch</h3>
    </div>
    <div class="row">
        <div class="col col-md-6 col-sm-12">
            <form action="{{route('branch.store')}}" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="phone1">Phone 1</label>
                        <input type="text" name="phone1" class="form-control" id="phone1" placeholder="Enter Phone 1">
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="phone1">Phone 2</label>
                        <input type="text" name="phone2" class="form-control" id="phone1" placeholder="Enter Phone 2">
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address">
                    </div>
                </div>

               
                <div class="card-footer">

                    <button type="submit" class="btn btn-success" style="float:right">Submit</button>
                    <a class="btn btn-warning" href="index" style="float:left">Back</a>
                </div>


            </form>
        </div>
    </div>
</div>


@endsection
