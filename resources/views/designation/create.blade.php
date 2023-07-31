@extends('../layout/navbar1')

@section('title','Designations')


@section('content')


<!-- form start -->
<div class="card card-primary">
    <div class="card-header" style="background-color: grey">
        <h3 class="card-title">Add New Designation</h3>
    </div>
    <div class="row">
        <div class="col col-md-6 col-sm-12">
            <form action="{{route('designation.store')}}" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
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
