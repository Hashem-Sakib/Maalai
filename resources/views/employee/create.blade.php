@extends('../layout/navbar1')

@section('title','Employees')


@section('content')



<div class="card card-primary">
    <div class="card-header" style="background-color: grey">
        <h3 class="card-title">Add New Employee</h3>
    </div>

    <div class="row">
        <div class="col col-md-6 col-sm-12">
            <form action="{{ route('employee.store') }}" method="POST" >
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                    </div>


                    <div>
                        <p><b>Image<b></p>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile" name="image">
                            <label class="custom-file-label" for="customFile">Upload an Image</label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="designation">Select Designation</label>
                        <select name="designation" class="custom-select rounded-0" id="designation">
                            <option value="-1" selected disabled>--Select One--</option>
                            @foreach($designation as $d)
                                <option value="{{ $d->id }}">{{ $d->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="join_date">Join Date :</label>
                        <input type="datetime-local" name="join_date" class="form-control"  id="join_date" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
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
