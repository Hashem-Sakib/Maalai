@extends('../layout/navbar1')
@section('title','Product Details')

@section('content')

<a style="float:right" class="btn-sm btn-success" href="create">Add New Product</a>

<div class="card card-primary col-md-8" style="margin: auto">
    <div class="card-header" style="background-color: grey">
        <h3 class="card-title">Product Details</h3>
    </div>

    <table class="table table-bordered table-striped table-hover" border="1px">
        <tr>
            <td>ID</td>
            <td>1</td>
        </tr>
        <tr>
            <td>NAME</td>
            <td>Sweet</td>
        </tr>
        <tr>
            <td>Description</td>
            <td> Very Delicious</td>
        </tr>
        <tr>
            <td>Pakage</td>
            <td>High</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>StockOut or StockIn</td>
        </tr>
        <tr>
            <td>MRP</td>
            <td>250</td>
        </tr>
    </table>
    <a class="btn btn-warning" href="index" style="float:right">Back</a>

</div>



@endsection
