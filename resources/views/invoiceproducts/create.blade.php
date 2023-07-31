@extends('../layout/navbar1')

@section('title','Create Invoice Products')


@section('content')


<!-- form start -->
<div class="card card-primary">
    <div class="card-header" style="background-color: grey">
        <h3 class="card-title">Add New Invoice Products</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="row">
        <div class="col col-md-6 col-sm-12">
            <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                   
                    
                    <div class="form-group">
                        <label for="inv_id">Select Invoice</label>
                        <select name="inv_id" class="custom-select rounded-0" id="inv_id">
                            <option value="-1" selected disabled>--Select One--</option>
                            @foreach($invoices as $i)
                                <option value="{{ $i->id }}">{{ $i->id }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="p_id">Select Product</label>
                        <select name="p_id" class="custom-select rounded-0" id="p_id">
                            <option value="-1" selected disabled>--Select One--</option>
                            @foreach($products as $p)
                                <option value="{{ $p->id }}">{{ $p->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="unit">Unit</label>
                        <input type="text" name="unit" class="form-control" id="unit" placeholder="Enter unit">
                    </div>

                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="text" name="quantity" class="form-control" id="quantity"
                            placeholder="Enter Quantity">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price"
                            placeholder="Enter Price">
                    </div>
                    <div class="form-group">
                        <label for="total">Total</label>
                        <input type="text" name="total" class="form-control" id="total"
                            placeholder="Enter Password">
                    </div>

                    <div class="form-group">
                        <label for="unit_price">Unit Price</label>
                        <input type="text" name="unit_price" class="form-control" id="unit_price"
                            placeholder="Enter Unit Price">
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
