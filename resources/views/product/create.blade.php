@extends('../layout/navbar1')

@section('title','Products')

@section('content')

<!-- form start -->
<div class="card card-primary">
    <div class="card-header" style="background-color: grey">
        <h3 class="card-title">Add New Product</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="row">
        <div class="col col-md-6 col-sm-12">
            <form action="" method="">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                    </div>

                    <div class="custom-file mb-3">
                        {{-- <input type="file" class="custom-file-input" id="customFile" name="image">
                    <label class="custom-file-label" for="customFile">Upload an Image</label> --}}

                        <label for="avatar">Product Image</label>
                        <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
                    </div>




                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" id="description"
                            placeholder="Enter Description">
                    </div>

                    <div class="form-group">
                        <label for="pakage">Pakage</label>
                        <input type="text" name="pakage" class="form-control" id="pakage" placeholder="Enter pakage">
                    </div>

                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select name="status" class="custom-select rounded-0" id="status">
                            <option value="1">Stock Out</option>
                            <option value="2">In Stock</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="mrp">MRP</label>
                        <input type="text" name="mrp" class="form-control" id="mrp" placeholder="Enter MRP">
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
