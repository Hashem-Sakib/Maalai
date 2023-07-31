@extends('../layout/navbar1')

@section('title','Create Customer')


@section('content')


<!-- form start -->
<div class="card card-primary">
    <div class="card-header" style="background-color: grey">
        <h3 class="card-title">Add New Customer</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="row">
        <div class="col col-md-6 col-sm-12">
            <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                    </div>


                   

                    <div class="form-group">
                        <label for="phone1">Phone 1</label>
                        <input type="text" name="phone1" class="form-control" id="phone1" placeholder="Enter Primary Phone Number">
                    </div>

                    <div class="form-group">
                        <label for="phone2">Phone 2</label>
                        <input type="text" name="phone2" class="form-control" id="phone2" placeholder="Enter Secondary Phone Number">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address">
                    </div>

                    <div class="form-group">
                        <label for="geo_location">Geo Location</label>
                        <input type="text" name="geo_location" class="form-control" id="geo_location"
                            placeholder="Enter Password">
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
